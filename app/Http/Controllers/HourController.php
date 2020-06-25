<?php

namespace App\Http\Controllers;

use App\Hour;
use Illuminate\Http\Request;

class HourController extends Controller
{
    public function store(Request $request)
    {
        $hour = new Hour();
        $hour->hour = $request->hour;
        $hour->save();
    }
}
