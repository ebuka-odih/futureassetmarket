<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\User;
use Faker\Provider\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $bank = PaymentMethod::where('type', 'bank')->get();
        $wallet_data = PaymentMethod::where('type', 'wallet')->get();
        $wallets = PaymentMethod::cryptoWallet();
        $users = User::all();
        return view('admin.payment-method', compact('bank', 'wallet_data', 'wallets', 'users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);
        $wallet = new PaymentMethod();

        $wallet->name = $validated['name'];
        $wallet->value = $validated['value'];
        $wallet->type = 'wallet';
        $wallet->save();
        return redirect()->back()->with('success', 'Payment Method Added');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'nullable',
            'value' => 'nullable',
        ]);
        $wallet = PaymentMethod::findOrFail($id);

        $wallet->name = $validated['name'];
        $wallet->value = $validated['value'];
        $wallet->save();
        return redirect()->back()->with('success', 'Payment Method Updated');
    }

    public function destroy($id)
    {
        $wallet = PaymentMethod::findOrFail($id);
        $wallet->delete();
        return redirect()->back()->with('success', 'Payment Method Deleted');
    }

    public function storeBankDetails(Request $request)
    {
        // Validate the nested bank data
        $validated = $request->validate([
            'bank.name' => 'required|string',
            'bank.acct_num' => 'required|string',
            'bank.acct_name' => 'required|string',
            'bank.routing' => 'nullable|string',
            'bank.swift_code' => 'nullable|string',
            'bank.bank_address' => 'nullable|string',
            'bank.wire_instruction' => 'nullable|string',
        ]);

        $paymentMethod = new PaymentMethod();

        $paymentMethod->bank = $validated['bank'];
        $paymentMethod->type = 'bank';
        $paymentMethod->user_id = $request->user_id;
        $paymentMethod->save();

        return redirect()->back()->with('success', 'Payment Method Added');
    }

    public function updateBankDetails(Request $request, $id)
    {
        // Validate the nested bank data
        $validated = $request->validate([
            'bank.name' => 'required|string',
            'bank.acct_num' => 'required|string',
            'bank.acct_name' => 'required|string',
            'bank.routing' => 'nullable|string',
            'bank.swift_code' => 'nullable|string',
            'bank.bank_address' => 'nullable|string',
            'bank.wire_instruction' => 'nullable|string',
        ]);

        // Find the existing payment method or fail
        $paymentMethod = PaymentMethod::findOrFail($id);

        // Update the bank details
        $paymentMethod->bank = $validated['bank'];
        $paymentMethod->type = 'bank'; // Maintaining type as in store
        $paymentMethod->user_id = $request->user_id;
        $paymentMethod->save();

        return redirect()->back()->with('success', 'Payment Method Updated');
    }
}
