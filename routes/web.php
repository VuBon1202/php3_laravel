<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DangkiController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\DangnhapController;
use App\Http\Controllers\ChinhsachController;
use App\Http\Controllers\ChitietspController;
use App\Http\Controllers\AddgiohangController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\DhthanhcongController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use App\Http\Controllers\admins\SanPhamController as AdminsSanPhamController;

Route::get('/', function () {
    return view('welcome');
}); 



Route::get('/home',[HomeController::class,'index'])->name('home');


Route::get('/about',[PageController::class,'about'])->name('about');

Route::get('/post',[TintucController::class,'post'])->name('post');
Route::get('/lienhe',[LienheController::class,'lienhe'])->name('lienhe');
Route::get('/chinhsach',[ChinhsachController::class,'chinhsach'])->name('chinhsach');
Route::get('/dangnhap',[DangnhapController::class,'dangnhap'])->name('dangnhap');
Route::get('/dangki',[DangkiController::class,'dangki'])->name('dangki');
Route::get('/giohang',[AddgiohangController::class,'giohang'])->name('giohang');
Route::get('/admindex',[adminController::class,'admindex'])->name('admindex');
Route::get('/bill',[BillController::class,'bill'])->name('bill');
Route::get('/sanphama',[SanphamController::class,'sanphama'])->name('sanphama');
Route::get('/sanpham', [SanPhamController::class, 'search'])->name('products.search');
Route::get('/donhang',[DhthanhcongController::class,'donhang'])->name('donhang');
Route::get('/products/search', [SanPhamController::class, 'search'])->name('products.search');


Route::get('/chitietsp/{id}', [ChitietspController::class, 'chitietsp'])->name('chitietsp');

Route::post('/chitietsp/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/{sanpham}', [CommentController::class, 'store'])->name('comments.store');

// Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');


Route::get('/cart',[cartController::class,'index'])->name('cart'); // route để load trang giỏ hàng
Route::post('/addcart',[cartController::class,'addCart'])->name('addcart'); // route để add sản phẩm vào giỏ hàng, method POST
Route::get('/delcart/{id}',[cartController::class,'delCart'])->name('delcart'); // route để xóa sản phẩm trong giỏ hàng


Route::get('/admin',[AdminsSanPhamController::class,'index'])
->name('index')
->middleware(CheckRoleAdminMiddleware::class);

Route::resource('sanpham', AdminsSanPhamController::class);
Auth::routes();





Route::resource('danhmucs', DanhMucController::class);
Route::get('admin/danhmucs/create', [DanhMucController::class, 'create'])->name('admin.danhmucs.create');
Route::get('admin/danhmucs/{id}/edit', [DanhMucController::class, 'edit'])->name('admin.danhmucs.edit');
Route::delete('admin/danhmucs/{id}', [DanhMucController::class, 'destroy'])->name('admin.danhmucs.destroy');
Route::post('admins/danhmucs', [DanhMucController::class, 'store'])->name('admins.danhmucs.store');
Route::get('admin/danhmucs', [DanhMucController::class, 'index'])->name('admin.danhmucs.index');
Route::put('admins/danhmucs/{id}', [DanhMucController::class, 'update'])->name('admins.danhmucs.update');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
