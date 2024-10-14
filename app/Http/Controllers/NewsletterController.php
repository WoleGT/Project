<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        
    $data = $request->validated();
    
    Newsletter::create([
           'email'=> $request->input('email')
    ]);

    return back()->with("msg","Successful!");
    }
}

