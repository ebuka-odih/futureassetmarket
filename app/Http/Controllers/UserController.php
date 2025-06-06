<?php

namespace App\Http\Controllers;

use App\Models\BuyStock;
use App\Models\CryptoExchange;
use App\Models\Deposit;
use App\Models\Session;
use App\Models\Stock;
use App\Models\StockHolding;
use App\Models\User;
use App\Models\Withdrawal;
use App\Services\StockService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected $stockService;
    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }
    public function index()
    {
        $user = Auth::user();
        $withdrawal = Withdrawal::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        $deposit = Deposit::whereUserId(auth()->id())->where('status', 1)->sum('amount');
//        $invested = StockHolding::where('user_id', auth()->id())->sum('total_amount');

        $stocks = StockHolding::where('user_id', Auth::id())
            ->with('stock')
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

        $totalInvested = $stocks->sum('total_amount');
           // Total current value (sum of current values based on latest prices)
        $totalCurrentValue = $stocks->sum('current_value') ?? $totalInvested;

        $crypto = CryptoExchange::where('user_id', auth()->id())->sum('amount');
        return view('dashboard.index', compact('user', 'withdrawal', 'deposit',
            'totalCurrentValue', 'crypto'));
    }

    public function profile()
    {
        $user = Auth::user();
        $sessions = Session::whereUserId(auth()->id())->get();
        return view('dashboard.profile', compact('user', 'sessions'));
    }

    public function updateProfile(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'phone' => 'nullable|string',
            'telegram' => 'nullable|string',
            'city' => 'nullable|string',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = User::findOrFail($id);
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
            $avatarPath = $request->file('avatar')->store('files', 'public');
            $validated['avatar'] = $avatarPath;
        }
        $user->update($validated);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('status', 'Password updated successfully!');
    }

    public function loading()
    {
        return view('dashboard.loading');
    }


}
