<?php

namespace App\Http\Controllers;

use App\Models\CryptoAsset;
use App\Models\CryptoExchange;
use App\Services\CryptoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CryptoExchangeController extends Controller
{
    public function index()
    {
        $this->syncCryptoAssets();
        $assets = CryptoAsset::where('user_id', auth()->id())->get();
        $prices = $assets->pluck('price', 'id');
        return view('dashboard.crypto.index', compact('assets', 'prices',));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if ($request->amount > $user->balance) {
            return redirect()->with('error', 'Insufficient Balance');
        }
        $data = new CryptoExchange();
        $data->crypto_asset_id = $request->crypto_asset_id;
        $data->user_id = auth()->id();
        $data->amount = $request->amount;
        $data->type = "buy";
        $data->status = 1;
        $data->save();
        $asset = CryptoAsset::where('id', $data->crypto_asset_id)->first();
        $asset->balance = $data->cryptoValue();
        $asset->save();
        $user->balance -= $request->amount;
        $user->save();
        return redirect()->back()->with('success', "Buy Order Placed Successfully");
    }

    public function withdrawal(Request $request)
    {
        $asset = CryptoAsset::findOrFail($request->crypto_asset_id);
        if ($request->amount > $asset->balance) {
            return redirect()->back()->with('error', 'Insufficient Balance for ' . $asset->name . ' Wallet');
        }
        $data = new CryptoExchange();
        $data->crypto_asset_id = $request->crypto_asset_id;
        $data->user_id = auth()->id();
        $data->amount = $request->amount;
        $data->type = "sell";
        $data->withdrawal_wallet = $request->withdrawal_wallet;
        $data->save();
        $asset = CryptoAsset::where('id', $data->crypto_asset_id)->first();
        $asset->balance -= $data->cryptoValue();
        $asset->save();
        return redirect()->back()->with('success', "Withdrawal Request Sent Successfully, Awaiting Approval...");
    }

    public function OrderHistory()
    {
        $buy_data = CryptoExchange::where('user_id', auth()->id())->where('type', 'buy')->latest()->get();
        $sell_data = CryptoExchange::where('user_id', auth()->id())->where('type', 'sell')->latest()->get();
        return view('dashboard.crypto.history', compact('buy_data', 'sell_data'));
    }


    protected $cryptoService;

    public function __construct(CryptoService $cryptoService)
    {
        $this->cryptoService = $cryptoService;
    }

    public function syncCryptoAssets()
    {
        $cryptoService = new CryptoService();
        $cryptoService->syncCryptoAssets(auth()->id());
        return response()->json(['message' => 'Crypto assets synced successfully.']);
    }

    public function userSyncCryptoAssets($id)
    {
        $cryptoService = new CryptoService();
        $cryptoService->syncCryptoAssets($id);
        return redirect()->back()->with('success', "Coin fetch successfully");
    }

}
