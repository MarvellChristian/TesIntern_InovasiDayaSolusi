<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Status;

class TransactionController extends Controller
{
    public function view()
    {
        $transactions = Transaction::with('status')->get();
        $status = Status::all();
        $data = [
            'transactions' => $transactions,
            'status' => $status,
        ];
        return response()->json($data);
    }
}
