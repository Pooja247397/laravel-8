<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
      public function __construct()
      {
            $this->middleware('auth');
      }

    public function index(){
        $transaction = Transaction::get();
        return view('transaction.index',compact('transaction'));
    }
}
