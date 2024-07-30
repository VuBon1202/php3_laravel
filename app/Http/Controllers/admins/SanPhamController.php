<?php

namespace App\Http\Controllers\admins;

use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    public $san_pham;
    public function __construct()
    {
        $this->san_pham = new SanPham();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search=$request->input('search');
        $searchTrangThai=$request->input('searchTrangThai');
        $listSanPham=SanPham::query()
            ->when($search, function($query, $search){
                return $query
                    ->where('ten_san_pham', 'like',"%{$search}")
                    ->orWhere('ma_san_pham','=',"{$search}");        
            })
            ->when($searchTrangThai !== null, function($query) use ($searchTrangThai){
                return $query->where('trang_thai','=',$searchTrangThai);
            })
            ->paginate(10);

        $title = "Danh sách sản phẩm";
        return view('admin.sanpham.list', compact('title', 'listSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Thêm sản phẩm";
        return view('admin.sanpham.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SanPhamRequest $request)
    {
        //
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');

            if ($request->hasFile('hinh_anh')) {

                $filename = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            } else {
                $filename = null;
            }

            $params['hinh_anh'] = $filename;
            SanPham::create($params);

            return redirect()->route('sanpham.index')->with('success', 'Thêm sản phẩm thành công!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = SanPham::findOrFail($id);
        $product = SanPham::with('comments')->findOrFail($id);
        return view('admin.sanpham.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $sanPham = $this->san_pham->getDetailProduct($id);
        if (!$sanPham) {
            return redirect()->route('sanpham.index')->with('error', 'Không có sản phẩm!');
        }


        $title = "Chỉnh sửa thông tin sản phẩm";
        return view('admin.sanpham.edit', compact('title', 'sanPham'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {
            $params = $request->except('_token', '_method');

            // Xử lý hình ảnh
            $sanPham = SanPham::query()->findOrFail($id);
            if ($request->hasFile('hinh_anh')) {
                // Nếu người đẩy hình ảnh mới thì xóa hình ảnh cũ
                if ($sanPham->hinh_anh && Storage::disk('public')->exists($sanPham->hinh_anh)) {
                    Storage::disk('public')->delete($sanPham->hinh_anh);
                }
                // Thêm ảnh mới
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            } else {
                $params['hinh_anh'] = $sanPham->hinh_anh;
            }

            // Xử lý Query Builder
            $this->san_pham->updateProduct($id, $params);

            return redirect()->route('sanpham.index')->with('success', 'Cập nhật thông tin thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $san_pham = SanPham::findOrFail($id);
        if ($san_pham) {

            $san_pham->delete();

            if ($san_pham->hinh_anh && Storage::disk('public')->exists($san_pham->hinh_anh)) {
                Storage::disk('public')->delete($san_pham->hinh_anh);
            }

            return redirect()->route('sanpham.index')->with('success', 'Xóa sản phẩm thành công!');
        }
    }
}
