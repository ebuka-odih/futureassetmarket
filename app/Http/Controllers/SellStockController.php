<?php

namespace App\Http\Controllers;

use App\Mail\SellStockMail;
use App\Models\BuyStock;
use App\Models\SellStock;
use App\Models\Stock;
use App\Models\StockHolding;
use App\Models\StockOrder;
use App\Models\User;
use App\Services\StockService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SellStockController extends Controller
{


    protected $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }


    public function sellStock($id)
    {
        $holding = StockHolding::find($id);
        $data = StockOrder::where('user_id', Auth::id())->where('status', 1)->latest()->paginate(5);
        return view('dashboard.stock.sell-stock', compact('holding', 'data'));
    }

    public function storeSell(Request $request)
    {
        $user = Auth::user();
        $stockId = $request->input('stock_id');
        $shares = $request->input('shares');
        $orderType = $request->input('order_type', 1); // Default to market order (1)
        $limitPrice = $request->input('limit_price'); // Only for limit orders

        // Validate shares
        $holding = StockHolding::where('user_id', $user->id)->where('stock_id', $stockId)->first();
        if (!$holding || $holding->total_shares < $shares) {
            return redirect()->back()->with('error', 'Insufficient shares to sell');
        }

        // Get current stock price
        $stock = $holding->stock;
        $latestStockData = $this->stockService->fetchStockData([$stock->symbol]);
        $currentPrice = collect($latestStockData)->firstWhere('symbol', $stock->symbol)['price'] ?? null;

        if (!$currentPrice) {
            return redirect()->back()->with('error', 'Unable to fetch current stock price');
        }

        $sellOrder = null;

        if ($orderType == 1) { // Market sell order
            $sellValue = $shares * $currentPrice;

            DB::transaction(function () use ($user, $stockId, $shares, $currentPrice, $sellValue, $holding, &$sellOrder) {
                // Add proceeds to user balance
                $user->balance += $sellValue;
                $user->save();

                // Deduct from holding
                $holding->total_shares -= $shares;
                $holding->total_amount -= $shares * $holding->average_price;
                if ($holding->total_shares <= 0) {
                    $holding->delete();
                } else {
                    $holding->average_price = $holding->total_amount / $holding->total_shares;
                    $holding->save();
                }

                // Record the sell order
                $sellOrder = StockOrder::create([
                    'user_id' => $user->id,
                    'stock_id' => $stockId,
                    'amount' => $sellValue,
                    'shares' => $shares,
                    'price' => $currentPrice,
                    'order_type' => 1, // Market
                    'type' => 2, // Sell
                    'status' => 2, // Filled
                    'filled_at' => now(),
                ]);
            });

            // Send email notification
            Mail::to($user->email)->send(new SellStockMail($sellOrder));
            return redirect()->back()->with('success', 'Market sell order executed successfully');
        } elseif ($orderType == 2) { // Limit sell order
            if (!$limitPrice) {
                return redirect()->back()->with('error', 'Limit price is required for limit orders');
            }

            $sellOrder = StockOrder::create([
                'user_id' => $user->id,
                'stock_id' => $stockId,
                'amount' => $shares * $limitPrice, // Estimated amount (updated when filled)
                'shares' => $shares,
                'price' => 0, // Filled price set later
                'order_type' => 2, // Limit
                'type' => 2, // Sell
                'status' => 1, // Pending
                'limit_price' => $limitPrice,
            ]);

            return redirect()->back()->with('success', 'Sell limit order placed successfully');
        }

        return redirect()->back()->with('error', 'Invalid order type');
    }

    public function sellHistory()
    {
        $filledOrders = StockOrder::where('user_id', Auth::id())->where('status', 2)->where('type', 2)->latest()->get();
        return view('dashboard.stock.sell-history', compact('filledOrders'));
    }

    public function sellOrders()
    {
        // Fetch pending sell limit orders for this user with stock relationship
        $pendingSellOrders = StockOrder::where('user_id', Auth::id())
            ->where('status', 1) // Pending orders
            ->where('order_type', 2) // Limit orders
            ->where('type', 2) // Sell orders only
            ->with('stock') // Eager load stock relationship
            ->latest()
            ->get();

        // Fetch latest stock prices
        $symbols = $pendingSellOrders->pluck('stock.symbol')->unique()->toArray();
        $stockData = $this->stockService->fetchStockData($symbols);
        $stockPrices = collect($stockData)->pluck('price', 'symbol');

        // Add current price, potential value, and potential percentage
        $pendingSellOrders->each(function ($order) use ($stockPrices) {
            $currentPrice = $stockPrices[$order->stock->symbol] ?? null;

            // Fetch user's holding for this stock
            $holding = StockHolding::where('user_id', Auth::id())
                ->where('stock_id', $order->stock_id)
                ->first();

            if ($currentPrice && $holding) {
                $order->current_price = $currentPrice;
                $order->potential_value = $order->shares * $order->limit_price; // Value if filled at limit price
                $order->potential_percentage = $holding->average_price
                    ? (($order->limit_price - $holding->average_price) / $holding->average_price) * 100
                    : null; // PnL if sold at limit price vs. purchase price
            } else {
                $order->current_price = null;
                $order->potential_value = null;
                $order->potential_percentage = null;
            }
        });

        return view('dashboard.stock.sell-orders', compact('pendingSellOrders'));
    }


}
