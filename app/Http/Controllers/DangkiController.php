<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangkiController extends Controller
{
    public function dangki()
    {
        return view('clients.dangki');
    }
}
