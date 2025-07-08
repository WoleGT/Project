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
    $data = $request->validated([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:visas,email',
        'phone_number' => 'required|string|max:15',
        'visa_type' => 'required|string|max:255',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
    ],
    [
        'name.required' => 'Name is required',
        'email.required' => 'Email is required',
        'email.unique' => 'Email has already been used to book a consultation',
        'email.email' => 'Please provide a valid email address',
        'phone_number.required' => 'Phone number is required',
        'phone_number.max' => 'Phone number must not exceed 15 characters',
        'visa_type.required' => 'Visa type is required',
        'date.required' => 'Date is required',
        'time.required' => 'Time is required',
        'time.date_format' => 'Time must be in the format HH:MM',
    ]);

      
    $visa = Visa::create([
        'name'=> $request->input('name'),
        'email'=> $request->input('email'),
        'phone_number'=> $request->input('phone_number'),
        'visa_type'=> $request->input('visa_type'),
        'date'=> $request->input('date'),
        'time'=> $request->input('time')
    ]);     

    Mail::to('info@spicytravelsntour.com')->send(new VisaMail($visa));

    return back()->with("msg",  " 🎉 Booked Successfully! Pay to 0037010097 - SpicyTravels n Tour Ltd (StanbicIBTC)");

}

}


