<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    public function index()
    {
        $cards = CreditCard::where('user_id', auth()->id())->get();

        return view('credit_cards.index', compact('cards'));
    }
}
