<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChinhsachController extends Controller
{
    public function chinhsach()
    {
        return view('clients.chinhsach');
    }
}
