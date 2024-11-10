<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function deposit(Request $request)
{
    $validated = $request->validate([
        'amount' => 'required|numeric|min:1',
    ]);

    $user = auth()->user();
    
    // Add deposit transaction
    $transaction = new Transaction();
    $transaction->user_id = $user->id;
    $transaction->amount = $request->amount;
    $transaction->type = 'deposit';
    $transaction->save();

    // Update total deposit and balance
    $user->total_deposit += $request->amount;
    $user->earnings_balance += $request->amount;
    $user->save();

    return redirect()->back()->with('success', 'Deposit successful!');
}


public function withdraw(Request $request)
{
    $validated = $request->validate([
        'amount' => 'required|numeric|min:1',
    ]);

    $user = auth()->user();

    if ($user->earnings_balance < $request->amount) {
        return redirect()->back()->with('error', 'Insufficient balance.');
    }

    // Add withdrawal transaction
    $transaction = new Transaction();
    $transaction->user_id = $user->id;
    $transaction->amount = $request->amount;
    $transaction->type = 'withdrawal';
    $transaction->save();

    // Update total withdrawal and balance
    $user->total_withdrawal += $request->amount;
    $user->earnings_balance -= $request->amount;
    $user->save();

    return redirect()->back()->with('success', 'Withdrawal successful!');
}


public function referralEarnings($referralAmount)
{
    $user = auth()->user();

    // Add referral earnings
    $transaction = new Transaction();
    $transaction->user_id = $user->id;
    $transaction->amount = $referralAmount;
    $transaction->type = 'referral';
    $transaction->save();

    // Update referral earnings and balance
    $user->referral_earnings += $referralAmount;
    $user->earnings_balance += $referralAmount;
    $user->save();

    return redirect()->back()->with('success', 'Referral earnings added!');
}

}
