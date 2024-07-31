<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;

class PageController extends Controller
{
    public function about()
    {
        return view('clients.about');
    }
}
