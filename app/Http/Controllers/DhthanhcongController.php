<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DhthanhcongController extends Controller
{
    public function donhang()
    {
        return view('clients.donhang');
    }
}
