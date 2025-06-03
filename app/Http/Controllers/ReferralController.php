<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $referrals = $user->referrals()->with('referral')->get();

        return view('dashboard.referrals', compact('referrals'));
    }



}
