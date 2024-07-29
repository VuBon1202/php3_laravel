<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class ChitietspController extends Controller
{
    public function chitietsp($id)
    {
        $product = SanPham::findOrFail($id);
        
        return view('clients.chitietsp', compact('product'));
    }
}
