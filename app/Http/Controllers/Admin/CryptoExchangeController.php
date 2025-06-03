<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CryptoAsset;
use App\Models\CryptoExchange;
use Illuminate\Http\Request;

class CryptoExchangeController extends Controller
{
    public function cryptoExchange()
    {
        $deposits = CryptoExchange::where('type', 'buy')->get();
        $withdrawal = CryptoExchange::where('type', 'sell')->get();
        return view('admin.crypto.index', compact('deposits', 'withdrawal'));
    }

    public function cryptoExchangeStore(Request $request, $id)
    {
        $data = CryptoExchange::findOrFail($id);
        $data->status = 1;
        $data->save();
        return redirect()->back()->with('success', 'Approved Successfully');
    }

    public function cryptoExchangeWithdraw(Request $request, $id)
    {
        $asset = CryptoAsset::findOrFail($request->crypto_asset_id);
        $asset->balance -= $request->amount;
        $asset->save();
        $data = CryptoExchange::findOrFail($id);
        $data->status = 1;
        $data->save();
        return redirect()->back()->with('success', 'Approved Successfully');
    }
}
