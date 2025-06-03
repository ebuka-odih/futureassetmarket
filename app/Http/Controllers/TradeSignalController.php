<?php

namespace App\Http\Controllers;

use App\Models\Signal;
use App\Models\TradeSignal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeSignalController extends Controller
{
    public function index()
    {
        $signals = Signal::latest()->get();
        return view('dashboard.signal.index', compact('signals', ));
    }

    public function tradeSignal($id)
    {
        $signal = Signal::findOrFail($id);
        $user = Auth::user();
        $trades = TradeSignal::where('user_id', Auth::id())->latest()->get();
        return view('dashboard.signal.trade', compact('signal', 'user', 'trades'));
    }

    public function tradeSignalStore(Request $request)
    {
        $request->validate([
            'signal_id' => 'required|exists:signals,id',
            'trade_amount' => 'required|numeric|min:0.0001',
        ]);

        $signal = Signal::findOrFail($request->signal_id);

        if ($signal->expires_at && now()->greaterThan($signal->expires_at)) {
            return back()->with('error', 'This signal has expired.');
        }

        // Check min amount
        if ($signal->min_amount && $request->trade_amount < $signal->min_amount) {
            return back()->with('error', 'Trade amount is less than the minimum allowed.');
        }

        // Create the trade signal
        $trade = TradeSignal::create([
            'signal_id' => $signal->id,
            'user_id' => Auth::id(),
            'amount' => $request->trade_amount,
            'status' => 0, // pending
        ]);

        return back()->with('success', 'Trade started successfully!');
    }

    public function tradeSignalHistory()
    {
        $tradeSignals = TradeSignal::where('user_id', Auth::id())->latest()->get();
        return view('dashboard.signal.history', compact('tradeSignals'));
    }

}
