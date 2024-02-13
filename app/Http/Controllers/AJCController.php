<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AJCController extends Controller
{
    public function internet()
    {
        return view('include.internet');
    }
}
