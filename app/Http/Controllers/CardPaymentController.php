<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardPaymentController extends Controller
{
    public function index()
    {
        return view('cardpayment');
    }
}
