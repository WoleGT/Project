<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use Illuminate\Http\Request;
use App\Http\Requests\VisaRequest;
use Illuminate\Support\Facades\Notification;
use App\Mail\VisaMail;
use Mail;


class VisaController extends Controller
{
    public function index()
    {
      return view('visa');
    }

    public function store(VisaRequest $request)
{
    $data = $request->validated();

      
    $visa = Visa::create([
        'name'=> $request->input('name'),
        'email'=> $request->input('email'),
        'phone_number'=> $request->input('phone_number'),
        'visa_type'=> $request->input('visa_type'),
        'date'=> $request->input('date'),
        'time'=> $request->input('time')
    ]);     

    Mail::to('info@spicytravelsntour.com')->send(new VisaMail($visa));

    return back()->with("msg", `Booked! Pay to 0037010097 - SpicyTravels n Tour Ltd (StanbicIBTC) <a href="{{url('/cardpayment') }}" style="text-decoration:underline">Click</a> for Card Payment`);

}

}


