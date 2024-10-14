<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $visa = Visa::where('id', $id)->first();
        return view('dashboard')->with(['visa' => $visa]);
    }
}
