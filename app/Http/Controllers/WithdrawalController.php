<?php

namespace App\Http\Controllers;

use App\Mail\AdminDepositMail;
use App\Mail\AdminWithdrawalMail;
use App\Mail\DepositMail;
use App\Mail\WithdrawalMail;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function withdrawal()
    {
        $user = Auth::user();
        $withdrawal = Withdrawal::whereUserId(auth()->id())->latest()->get();
        return view('dashboard.transactions.withdrawal', compact('user', 'withdrawal'));
    }

    public function withdrawalStore(Request $request)
    {
        $admin = User::where('role', 'admin')->first();
        $withdraw = new Withdrawal();
        $withdraw->amount = $request->amount;
        $withdraw->user_id = Auth::id();
        $withdraw->payment_method = $request->payment_method;
        if ($request->payment_method == 'crypto')
        {
            $withdraw->address = $request->address;
            $withdraw->wallet = $request->wallet;
            $withdraw->save();
            Mail::to(\auth()->user()->email)->send( new WithdrawalMail($withdraw));
            Mail::to($admin->email)->send( new AdminWithdrawalMail($withdraw));
            return redirect()->back()->with('success', 'Withdrawal Request Sent');
        }
        elseif ($request->payment_method == 'bank')
        {
            $validateData = $request->validate([
                'bank.bank_name' => 'required',
                'bank.acct_name'   => 'required',
                'bank.acct_number' => 'required',
                'bank.routing_number' => 'nullable',
                'bank.swift_code' => 'nullable',
                'bank.iban' => 'nullable',
                'bank.branch_address' => 'nullable',
            ]);
            $withdraw->bank = $validateData['bank'];
            $withdraw->save();

             Mail::to(\auth()->user()->email)->send(new WithdrawalMail($withdraw));
             Mail::to($admin->email)->send( new AdminWithdrawalMail($withdraw));
            return redirect()->back()->with('success', 'Withdrawal Request Sent');
        }

        $withdraw->paypal = $request->paypal;
        $withdraw->save();

        Mail::to(\auth()->user()->email)->send( new WithdrawalMail($withdraw));
        Mail::to($admin->email)->send( new AdminWithdrawalMail($withdraw));
        return redirect()->back()->with('success', 'Withdrawal Request Sent');
    }

}
