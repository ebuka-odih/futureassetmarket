<?php

namespace App\Http\Controllers;

use App\Mail\BuyStockMail;
use App\Models\BuyStock;
use App\Models\Stock;
use App\Models\StockHolding;
use App\Models\StockOrder;
use App\Services\StockService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BuyStockController extends Controller
{


    public function checkLimitOrders(StockService $stockApiService)
    {
        $buffer = config('trading.limit_order_buffer', 0.01); // Default 1%, optional for tolerance

        $pendingOrders = StockOrder::where('order_type', 2) // Limit orders
        ->where('status', 1) // Pending
        ->with('stock')
            ->get();

        if ($pendingOrders->isEmpty()) {
            return;
        }

        $symbols = $pendingOrders->pluck('stock.symbol')->unique()->toArray();
        $stockData = $stockApiService->fetchStockData($symbols);
        $stockPrices = collect($stockData)->pluck('price', 'symbol')->all();

        foreach ($pendingOrders as $order) {
            $symbol = $order->stock->symbol;

            if (!isset($stockPrices[$symbol])) {
                Log::warning("Could not get current price for {$symbol}");
                continue;
            }

            $currentPrice = $stockPrices[$symbol];
            $user = $order->user;

            if ($order->type == 1) { // Buy limit order
                if ($currentPrice <= $order->limit_price) { // Buy when price drops to or below limit
                    if ($user->balance >= $order->amount) {
                        try {
                            DB::transaction(function () use ($user, $order, $currentPrice) {
                                $user->balance -= $order->amount;
                                $user->save();

                                $holding = StockHolding::firstOrNew(['user_id' => $user->id, 'stock_id' => $order->stock_id]);
                                $holding->total_amount = ($holding->total_amount ?? 0) + $order->amount;
                                $holding->total_shares = ($holding->total_shares ?? 0) + $order->shares;
                                $holding->average_price = $holding->total_shares ? ($holding->total_amount / $holding->total_shares) : $currentPrice;
                                $holding->save();

                                $order->status = 2; // Filled
                                $order->price = $currentPrice; // Fill at current price
                                $order->filled_at = now();
                                $order->save();
                            });
                            Mail::to($user->email)->send(new BuyStockMail($order));
                        } catch (\Exception $e) {
                            Log::error("Failed to fill buy limit order: " . $e->getMessage());
                        }
                    } else {
                        $order->status = 0; // Cancelled
                        $order->save();
                        // Mail::to($user->email)->send(new LimitOrderFailedMail($order));
                    }
                }
            } elseif ($order->type == 2) { // Sell limit order
                if ($currentPrice >= $order->limit_price) { // Sell when price rises to or above limit
                    $holding = StockHolding::where('user_id', $user->id)
                        ->where('stock_id', $order->stock_id)
                        ->first();

                    if ($holding && $holding->total_shares >= $order->shares) {
                        try {
                            DB::transaction(function () use ($user, $order, $currentPrice, $holding) {
                                $sellValue = $order->shares * $currentPrice;
                                $user->balance += $sellValue;
                                $user->save();

                                $holding->total_shares -= $order->shares;
                                $holding->total_amount -= $order->shares * $holding->average_price;
                                if ($holding->total_shares <= 0) {
                                    $holding->delete();
                                } else {
                                    $holding->average_price = $holding->total_amount / $holding->total_shares;
                                    $holding->save();
                                }

                                $order->status = 2; // Filled
                                $order->price = $currentPrice; // Fill at current price
                                $order->amount = $sellValue; // Update amount to reflect actual sell value
                                $order->filled_at = now();
                                $order->save();
                            });
                            Mail::to($user->email)->send(new SellStockMail($order));
                        } catch (\Exception $e) {
                            Log::error("Failed to fill sell limit order: " . $e->getMessage());
                        }
                    } else {
                        $order->status = 0; // Cancelled
                        $order->save();
                        // Mail::to($user->email)->send(new LimitOrderFailedMail($order));
                    }
                }
            }
        }
    }


}
