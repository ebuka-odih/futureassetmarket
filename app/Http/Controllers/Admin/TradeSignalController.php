<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TradeSignal;
use Illuminate\Http\Request;

class TradeSignalController extends Controller
{
    public function index()
    {
        $trades = TradeSignal::with('signal', 'user')->latest()->get();
        return view('admin.signal.trade-history', compact('trades'));
    }

    public function tradePNL(Request $request)
    {
        $tradeId = $request->get('trade_id');
        if ($request->type == 'add') {
            $trade = TradeSignal::find($tradeId);
            $trade->pnl += $request->amount;
            $trade->save();
            return redirect()->back()->with('success', 'PNL added successfully!');
        }
        $trade = TradeSignal::find($tradeId);
        $trade->pnl -= $request->amount;
        $trade->save();
        return redirect()->back()->with('success', 'PNL removed successfully!');
    }

    public function closeTrade($id)
    {
        $trade = TradeSignal::findOrFail($id);
        $trade->status = 2;
        $trade->save();
        return redirect()->back()->with('success', 'Trade closed successfully!');
    }

}
