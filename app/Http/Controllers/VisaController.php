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

      
    $visa = Visa::create($data);     

    Mail::to('info@spicytravelsntour.com')->send(new VisaMail($visa));

    return back()->with("msg",  "🎉 Pay to 0037010097 - SpicyTravels n Tour Ltd (StanbicIBTC) to confirm your slot");

}

}


