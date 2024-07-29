<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TintucController extends Controller
{
    public function post()
    {
        return view('clients.tintuc');
    }
}
