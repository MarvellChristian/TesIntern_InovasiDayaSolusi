<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function view()
    {
        $transactions = Transaction::with('status')->get();
        return response()->json($transactions);
    }
}
