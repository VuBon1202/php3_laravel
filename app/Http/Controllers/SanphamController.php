<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    public function sanphama()
    {
        $categories = DanhMuc::all();
        $products = SanPham::all();
    $items = SanPham::paginate(0);
    return view('clients.sanpham', [
        'products' => $products,
        'items' => $items,
        'categories' => $categories,
        
    ]);
    }
    public function show($id)
    {
        $product = SanPham::with('comments')->findOrFail($id);
        return view('clients.spchitiet', compact('product'));
    }
    
    public function search(Request $request)
    {
        $kyw = $request->input('kyw');
        $categoryId = $request->input('category');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $query = SanPham::query();

        // Thêm điều kiện tìm kiếm
        if ($kyw) {
            $query->where(function ($subQuery) use ($kyw) {
                $subQuery->where('ten_san_pham', 'like', '%' . $kyw . '%')
                         ->orWhere('ma_san_pham', 'like', '%' . $kyw . '%');
            });
        }
        if ($minPrice) {
            $query->where('gia', '>=', $minPrice);
        }
        if ($maxPrice) {
            $query->where('gia', '<=', $maxPrice);
        }
        // Thêm điều kiện lọc theo danh mục
        if ($categoryId) {
            $query->where('id_danhmuc', $categoryId); 
        }

        $items = $query->paginate(10);

        $categories = DanhMuc::all();

        // Trả về view với các biến
        return view('clients.sanpham', [
            'items' => $items,
            'categories' => $categories,
            'selectedCategory' => $categoryId, // Đảm bảo biến này được truyền
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
        ]);
    }

}