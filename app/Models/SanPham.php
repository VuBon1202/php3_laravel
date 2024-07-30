<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    public function getList()
    {
        $listSanPham = DB::table('san_pham')
            ->orderBy('id', 'DESC')
            ->get();

        return $listSanPham;
    }

    public function createProduct($data)
    {
        DB::table('san_pham')->insert($data);
    }

    // Lấy thông tin chi tiết
    public function getDetailProduct($id)
    {
        $sanPham = DB::table('san_pham')
            ->where('id', $id)
            ->where('deleted_at', null)
            ->first();

        return $sanPham;
    }
    public function updateProduct($id, $data)
    {
        DB::table('san_pham')
            ->where('id', $id)
            ->update($data);
    }

    // Xóa sản phẩm bằng Query Builder
    public function deleteProduct($id)
    {
        DB::table('san_pham')
            ->where('id', $id)
            ->delete();
    }
    use HasFactory;
    protected $table = 'san_pham';

    protected $fillable = [
        'hinh_anh',
        'ma_san_pham',
        'ten_san_pham',
        'gia',
        'so_luong',
        'ngay_nhap',
        'trang_thai',
        'delete_at',
        'sp_id'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id');
    }
    public function danhMuc()
    {
        return $this->belongsTo(DanhMuc::class, 'id_danhmuc');
    }
    public $timestamps = false;
}
