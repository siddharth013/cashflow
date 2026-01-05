<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function index()
    {
        $accounts = BankAccount::where('user_id', auth()->id())->get();

        return view('bank_accounts.index', compact('accounts'));
    }
}
