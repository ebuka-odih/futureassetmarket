<?php

namespace App\Http\Controllers;

use App\Models\CopiedTrade;
use App\Models\CopyTrader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopiedTradeController extends Controller
{
    public function index()
    {
        $expert_traders = CopyTrader::all();
        $copiedTrades = CopiedTrade::where('user_id', auth()->id())->get();
        return view('dashboard.copied_trade.index', compact('expert_traders', 'copiedTrades'));
    }

    public function store(Request $request)
    {
        $traderId = $request->input('trader_id');
        $data = CopyTrader::find($traderId);
        if($request->amount > \auth()->user()->balance)
        {
            return redirect()->back()->with('error', 'Insufficient Balance, Kindly fund your wallet');
        }
        $data = new CopiedTrade();
        $data->copy_trader_id = $traderId;
        $data->user_id = Auth::id();
        $data->amount = $request->input('amount');
        $data->status = 1;
        $data->save();
        $user = Auth::user();
        $user->balance -= $data->amount;
        $user->save();
        return redirect()->back()->with('success', 'Copied Trade Successful');
    }

    public function copiedHistory()
    {
        $copiedTrades = CopiedTrade::where('user_id', auth()->id())->get();
        return view('dashboard.copied_trade.history', compact('copiedTrades'));
    }
}
