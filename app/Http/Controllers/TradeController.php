<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\TradePairs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TradeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $buy_trades = Trade::where('user_id', Auth::id())->where('trade_type', 'buy')->latest()->paginate(10);
        $sell_trades = Trade::where('user_id', Auth::id())->where('trade_type', 'sell')->latest()->paginate(10);
        $pairs = TradePairs::all();
        return view('dashboard.trade.index', compact( 'user', 'pairs', 'buy_trades', 'sell_trades'));
    }

     public function store(Request $request)
    {

        // Validation rules
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
            'acct_type' => 'nullable|string|max:255',
            'market' => 'nullable|string|max:255',
            'pair' => 'nullable|string|max:255',
            'time_interval' => 'nullable|string|max:255',
            'stop_loss' => 'nullable|string|max:255',
            'take_profit' => 'nullable|string|max:255',
            'trade_type' => 'nullable|string|max:255',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        if (auth()->user()->balance < $request->input('amount')) {
            return redirect()->back()->with('error', "Insufficient balance to execute the trade.");
        }


        // Create the trade record
       $trade = Trade::create([
            'amount' => $request->input('amount'),
            'acct_type' => $request->input('acct_type'),
            'market' => $request->input('market'),
            'crypto_pair' => $request->input('crypto_pair'),
            'forex_pair' => $request->input('forex_pair'),
            'stock_pair' => $request->input('stock_pair'),
            'common_pair' => $request->input('common_pair'),
            'indices_pair' => $request->input('indices_pair'),
            'bond_pair' => $request->input('bond_pair'),
            'etf_pair' => $request->input('etf_pair'),
            'time_interval' => $request->input('time_interval'),
            'stop_loss' => $request->input('stop_loss'),
            'take_profit' => $request->input('take_profit'),
            'trade_type' => $request->input('trade_type'),
            'user_id' => Auth::id(),
            'status' => 1
        ]);

        // Deduct the trade amount from the user's balance (if applicable)
        if ($trade->acct_type == 'Live')
        {
            $user = Auth::user();
            $user->balance -= $request->input('amount');
            $user->acum_balance += $request->amount;
            $user->save();
        }

        // Return a successful response
        return redirect()->back()->with('success', "Order created successfully");
    }

}
