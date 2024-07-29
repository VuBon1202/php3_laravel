<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    public function sanphama()
    {
        $products = SanPham::all();
    $items = SanPham::paginate(0);
    return view('clients.sanpham', [
        'products' => $products,
        'items' => $items
    ]);
    }
    public function show($id)
    {
        $product = SanPham::with('comments')->findOrFail($id);
        return view('clients.spchitiet', compact('product'));
    }
}