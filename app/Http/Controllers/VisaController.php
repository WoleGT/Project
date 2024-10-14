<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use Illuminate\Http\Request;
use App\Http\Requests\VisaRequest;

class VisaController extends Controller
{
    public function index()
    {
      return view('visa');
    }

    public function store(VisaRequest $request)
{
    $data = $request->validated();

           
    Visa::create([
        'name'=> $request->input('name'),
        'email'=> $request->input('email'),
        'phone_number'=> $request->input('phone_number'),
        'visa_type'=> $request->input('visa_type'),
        'date'=> $request->input('date'),
        'time'=> $request->input('time')
    ]);

    return back()->with("msg","Successful! please pay into 0037010097 | SpicyTravels n Tour Ltd | StanbicIBTC");

}

}


