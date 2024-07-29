<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function bill()
    {
        return view('clients.bill');
    }
}
