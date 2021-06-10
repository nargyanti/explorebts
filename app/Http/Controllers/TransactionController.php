<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();   
        $transactions = Transaction::where('user_id', $user->id)->get();     
        return view('e-wallet.index', ['user' => $user, 'transactions' => $transactions]);
    }

    public function topUp() {
        return view('e-wallet.topUp');
    }

    public function addBalance(Request $request) {
        $request->validate([            
            'account_no' => 'required',
            'account_bank' => 'required',
            'amount' => 'required',            
        ]);
        
        $authUser = Auth::user();
        $transaction = new Transaction;
        $transaction->user_id = $authUser->id;
        $transaction->account_no = $request->get('account_no');
        $transaction->account_bank = $request->get('account_bank');
        $transaction->amount = $request->get('amount');
        $transaction->category = 'Top-up';
                               
        $user = new User;                
        $user->id = $authUser->id;                
        $transaction->user()->associate($user);        
        $transaction->save();             

        $authUser->balance +=  $request->get('amount');
        $authUser->save();     

        // redirect after add data
        return redirect()->route('e-wallet')
            ->with('success', 'Balance Successfully Added');
    }

    public function withdrawal() {
        return view('e-wallet.withdrawal');
    }

    public function reduceBalance(Request $request) {
        $request->validate([            
            'account_no' => 'required',
            'account_bank' => 'required',
            'amount' => 'required',            
        ]);
        
        $authUser = Auth::user();
        if($authUser->balance - $request->get('amount') >= 0 ) {
            $transaction = new Transaction;
            $transaction->user_id = $authUser->id;
            $transaction->account_no = $request->get('account_no');
            $transaction->account_bank = $request->get('account_bank');
            $transaction->amount = $request->get('amount');
            $transaction->category = 'Withdrawal';
                                
            $user = new User;                
            $user->id = $authUser->id;                
            $transaction->user()->associate($user);        
            $transaction->save();             
            
            $authUser->balance -= $request->get('amount');
            $authUser->save();     

            // redirect after add data
            return redirect()->route('e-wallet')
                ->with('success', 'Balance Successfully Reduced');
        } else {
            return redirect()->route('e-wallet')
            ->with('failed', 'The balance was less than the withdrawn amount');
        }
        
    }
}
