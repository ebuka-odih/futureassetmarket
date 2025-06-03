<?php

namespace App\Http\Controllers;

use App\Mail\AdminDepositMail;
use App\Mail\DepositMail;
use App\Models\Deposit;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function deposit()
    {
        $user = Auth::user();
        $wallets = PaymentMethod::where('type', 'wallet')->get();
        $deposits = Deposit::whereUserId(auth()->id())->latest()->get();
        return view('dashboard.transactions.deposit', compact('user', 'wallets','deposits'));
    }

    public function processDeposit(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required',
            'payment_method_id' => 'required',
        ]);

        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->amount = $validated['amount'];
        $deposit->payment_method_id = $validated['payment_method_id'];
        $deposit->save();
        return redirect()->route('user.cryptoPayment', $deposit->id);
    }

    public function cryptoPayment($id)
    {
        $deposit = Deposit::findOrFail($id);
        $wallets = PaymentMethod::where('type', 'wallet')->get();
        return view('dashboard.transactions.payment', compact('deposit', 'wallets'));
    }

    public function confirmPayment(Request $request, $id)
    {
        $validated = $request->validate([
            'proof' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('proof')) {
            $avatarPath = $request->file('proof')->store('files', 'public');
        }

        $deposit = Deposit::findOrFail($id);
        $deposit->proof = $avatarPath ?? null;
        $deposit->save();

        $admin = User::where('role', 'admin')->first();
        Mail::to(auth()->user()->email)->send(new DepositMail($deposit));
        Mail::to($admin->email)->send(new AdminDepositMail($deposit));
        return redirect()->back()->with('success', 'Deposit Sent, awaiting for approval');

    }



    public function bankDeposit()
    {
        $user = Auth::user();
        $bank = PaymentMethod::where('user_id', \auth()->id())->where('type', 'bank')->get();
        $deposits = Deposit::whereUserId(auth()->id())->latest()->get();
        return view('dashboard.transactions.bank-deposit', compact('user', 'bank', 'deposits'));
    }

    public function bankPayment(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required',
            'payment_method_id' => 'required',
            'proof' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('proof')) {
            $avatarPath = $request->file('proof')->store('files', 'public');
        }

        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->amount = $validated['amount'];
        $deposit->payment_method_id = $validated['payment_method_id'];
        $deposit->proof = $avatarPath ?? null;
        $deposit->save();

        $admin = User::where('role', 'admin')->first();
        Mail::to(auth()->user()->email)->send(new DepositMail($deposit));
        Mail::to($admin->email)->send(new AdminDepositMail($deposit));
        return redirect()->back()->with('success', 'Deposit Sent, awaiting for approval');

    }



}
