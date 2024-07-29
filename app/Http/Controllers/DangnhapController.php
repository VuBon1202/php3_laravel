<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangnhapController extends Controller
{
    public function dangnhap()
    {
        return view('clients.taikhoan');
    }
}
