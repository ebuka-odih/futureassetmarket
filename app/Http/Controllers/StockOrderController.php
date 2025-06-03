<?php

namespace App\Http\Controllers;

use App\Mail\BuyStockMail;
use App\Mail\SellStockMail;
use App\Models\BuyStock;
use App\Models\Stock;
use App\Models\StockHolding;
use App\Models\StockOrder;
use App\Services\StockService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class StockOrderController extends Controller
{
    protected $stockService;

    /**
     * Constructor to inject StockService.
     *
     * @param StockService $stockService
     */
    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }


    public function buyStock($id)
    {
        $stock = Stock::find($id);
        $data = StockOrder::where('user_id', Auth::id())->where('status', 1)->latest()->paginate(5);
        return view('dashboard.stock.buy-stock', compact('stock', 'data'));
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        $amount = $request->input('amount');
        $stockPrice = $request->input('stock_price');
        $shares = $amount / $stockPrice; // Calculate shares from amount and price

        // Validate balance
        if ($amount > $user->balance) {
            return redirect()->back()->with('error', 'Insufficient Balance, Make a deposit and try again');
        }

        $stockId = $request->input('stock_id');
        $orderType = $request->input('order_type', 1); // Default to market order
        $limitPrice = $request->input('limit_price');

        // Validate limit price if it's a limit order
        if ($orderType == 2 && !$limitPrice) {
            return redirect()->back()->with('error', 'Limit price is required for limit orders');
        }

        // Create new StockOrder record
        $order = new StockOrder();
        $order->user_id = $user->id;
        $order->stock_id = $stockId;
        $order->amount = $amount;
        $order->shares = $shares;
        $order->price = $stockPrice;
        $order->order_type = $orderType;
        $order->type = 1; // 1 = Buy
        $order->status = ($orderType == 1) ? 2 : 1; // 2 for market (filled), 1 for limit (pending)

        if ($orderType == 2) {
            $order->limit_price = $limitPrice;
        }

        // Use transaction for consistency
        DB::transaction(function () use ($user, $order, $amount, $shares, $stockPrice, $orderType) {
            $order->save();

            // For market orders, update StockHolding and balance immediately
            if ($orderType == 1) {
                $holding = StockHolding::firstOrNew([
                    'user_id' => $user->id,
                    'stock_id' => $order->stock_id,
                ]);

                // Calculate new holding values
                $newTotalAmount = ($holding->total_amount ?? 0) + $amount;
                $newTotalShares = ($holding->total_shares ?? 0) + $shares;
                $newAveragePrice = $newTotalShares ? ($newTotalAmount / $newTotalShares) : $stockPrice;

                $holding->total_amount = $newTotalAmount;
                $holding->total_shares = $newTotalShares;
                $holding->average_price = $newAveragePrice;
                $holding->save();

                // Deduct from user balance
                $user->balance -= $amount;
                $user->save();

                // Update filled_at
                $order->filled_at = Carbon::now();
                $order->save();
            }
        });

        // Send email and return response for market orders
        if ($orderType == 1) {
            Mail::to($user->email)->send(new BuyStockMail($order));
            return redirect()->back()->with('success', 'Market order placed successfully');
        }

        // For limit orders
        return redirect()->back()->with('success', 'Limit order placed successfully');
    }

    public function stockHoldings()
    {
        // Fetch user's stock holdings
        $stocks = StockHolding::where('user_id', Auth::id())
            ->with('stock') // Eager load stock relationship for symbol
            ->latest()
            ->get();

        // Fetch latest stock prices using injected StockService
        $symbols = $stocks->pluck('stock.symbol')->unique()->toArray();
        $latestStockData = $this->stockService->fetchStockData($symbols);
        $stockPrices = collect($latestStockData)->pluck('price', 'symbol');

        // Calculate PnL and current value for each holding
        $stocks->each(function ($holding) use ($stockPrices) {
            $latestPrice = $stockPrices[$holding->stock->symbol] ?? null;

            if ($latestPrice) {
                // Current value = total shares * latest price
                $holding->current_value = $holding->total_shares * $latestPrice;

                // PnL percentage = ((latest price - average price) / average price) * 100
                $holding->pnl = $holding->average_price
                    ? (($latestPrice - $holding->average_price) / $holding->average_price) * 100
                    : 0;
            } else {
                $holding->current_value = null;
                $holding->pnl = null;
            }
        });

        // Total invested amount (sum of original purchase amounts)
        $totalInvested = $stocks->sum('total_amount');

        // Total current value (sum of current values based on latest prices)
        $totalCurrentValue = $stocks->sum('current_value') ?? $totalInvested; // Fallback to invested if no current value

        // Portfolio percentage gain/loss = ((current value - invested) / invested) * 100
        $portfolioPercentage = $totalInvested > 0
            ? (($totalCurrentValue - $totalInvested) / $totalInvested) * 100
            : 0;

        $totalShares = $stocks->sum('total_shares');

        $totalBuy = StockOrder::where('user_id', Auth::id())->where('status', 2)->where('type', 1)->sum('amount');
        $totalSell = StockOrder::where('user_id', Auth::id())->where('status', 2)->where('type', 2)->sum('amount');
        $buyCount = StockOrder::where('user_id', Auth::id())->where('status', 2)->where('type', 1)->count();
        $sellCount = StockOrder::where('user_id', Auth::id())->where('status', 2)->where('type', 2)->count();
        return view('dashboard.stock.holdings', compact('stocks', 'totalInvested', 'totalCurrentValue', 'portfolioPercentage',
            'totalBuy', 'totalSell', 'buyCount', 'sellCount', 'totalShares'));
    }

    public function buyHistory($id)
    {
        // Fetch the stock holding
        $stockHolding = StockHolding::findOrFail($id);

        // Fetch filled buy orders for this stock and user
        $buyOrders = StockOrder::where('user_id', Auth::id())
            ->where('stock_id', $stockHolding->stock_id)
            ->where('status', 2) // Filled orders
            ->where('type', 1) // Buy orders only
            ->with('stock') // Eager load stock relationship
            ->latest()
            ->get();

        // Fetch latest stock price using injected StockService
        $latestStockData = $this->stockService->fetchStockData([$stockHolding->stock->symbol]);
        $latestPrice = collect($latestStockData)->firstWhere('symbol', $stockHolding->stock->symbol)['price'] ?? null;

        // Add dynamic attributes to buy orders for display
        $buyOrders->each(function ($order) use ($latestPrice) {
            if ($latestPrice) {
                $order->current_price = $latestPrice;
                $order->pnl = (($latestPrice - $order->price) / $order->price) * 100; // Percentage change
                $order->current_value = $order->shares * $latestPrice; // Current value of this order
            } else {
                $order->current_price = null;
                $order->pnl = null;
                $order->current_value = null;
            }
        });

        // Calculate total PnL for the holding
        $holdingPnL = $latestPrice && $stockHolding->average_price
            ? (($latestPrice - $stockHolding->average_price) / $stockHolding->average_price) * 100
            : null;
        $holdingCurrentValue = $latestPrice ? $stockHolding->total_shares * $latestPrice : null;

        return view('dashboard.stock.buy-history', compact('buyOrders', 'stockHolding', 'holdingPnL', 'holdingCurrentValue'));
    }


    public function filledOrders()
    {
        // Fetch filled buy orders for this user
        $filledOrders = StockOrder::where('user_id', Auth::id())
            ->where('status', 2) // Filled orders
            ->where('type', 1) // Buy orders only
            ->with('stock') // Eager load stock relationship
            ->latest()
            ->get();

        // Fetch latest stock prices
        $symbols = $filledOrders->pluck('stock.symbol')->unique()->toArray();
        $stockService = new StockService();
        $stockData = $stockService->fetchStockData($symbols);
        $stockPrices = collect($stockData)->pluck('price', 'symbol');

        // Calculate PnL, current value, and current price for each order
        $filledOrders->each(function ($order) use ($stockPrices) {
            $currentPrice = $stockPrices[$order->stock->symbol] ?? null;

            if ($currentPrice) {
                // Current value = shares * current price
                $order->current_value = $order->shares * $currentPrice;

                // PnL percentage = ((current price - buy price) / buy price) * 100
                $order->pnl = $order->price
                    ? (($currentPrice - $order->price) / $order->price) * 100
                    : 0;

                // Store current price
                $order->current_price = $currentPrice;
            } else {
                $order->current_value = null;
                $order->pnl = null;
                $order->current_price = null;
            }
        });

        return view('dashboard.stock.filled-orders', compact('filledOrders'));
    }

    public function limitOrders()
    {
        $buyStocks = StockOrder::where('user_id', Auth::id())->where('status', 1)->where('type', 1)->latest()->get();
        return view('dashboard.stock.limit-orders', compact('buyStocks'));
    }

    public function sell(Request $request, $id)
    {
        $stockHolding = StockHolding::where('user_id', Auth::id())->findOrFail($id);
        $sharesToSell = $request->input('shares');

        if ($sharesToSell <= 0 || $sharesToSell > $stockHolding->total_shares) {
            return redirect()->back()->with('error', 'Invalid number of shares');
        }

        $latestStockData = $this->stockService->fetchStockData([$stockHolding->stock->symbol]);
        $currentPrice = collect($latestStockData)->firstWhere('symbol', $stockHolding->stock->symbol)['price'] ?? null;

        if (!$currentPrice) {
            return redirect()->back()->with('error', 'Unable to fetch current price');
        }

        $sellValue = $sharesToSell * $currentPrice;

        $sellOrder = null;

        DB::transaction(function () use ($stockHolding, $sharesToSell, $sellValue, $currentPrice, &$sellOrder) {
            $user = Auth::user();
            $user->balance += $sellValue;
            $user->save();

            $stockHolding->total_shares -= $sharesToSell;
            $stockHolding->total_amount -= $sharesToSell * $stockHolding->average_price;
            if ($stockHolding->total_shares <= 0) {
                $stockHolding->delete();
            } else {
                $stockHolding->average_price = $stockHolding->total_amount / $stockHolding->total_shares;
                $stockHolding->save();
            }

            // Record sell order
            $sellOrder = StockOrder::create([
                'user_id' => $user->id,
                'stock_id' => $stockHolding->stock_id,
                'amount' => $sellValue,
                'shares' => $sharesToSell,
                'price' => $currentPrice,
                'order_type' => 1, // Market order
                'type' => 2, // Sell
                'status' => 2, // Filled
                'filled_at' => now(),
            ]);
        });

        // Send email notification
        Mail::to($stockHolding->user->email)->send(new SellStockMail($sellOrder));

        return redirect()->back()->with('success', 'Shares sold successfully');
    }





}
