<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
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
use App\Http\Controllers\DhthanhcongController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use App\Http\Controllers\admins\SanPhamController as AdminsSanPhamController;

Route::get('/', function () {
    return view('welcome');
}); 



Route::get('/home',[HomeController::class,'home'])->name('home');


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
Route::get('/donhang',[DhthanhcongController::class,'donhang'])->name('donhang');
Route::get('/chitietsp/{id}', [ChitietspController::class, 'chitietsp'])->name('chitietsp');


// Route::get('/sanpham/{sanPham}', [SanPhamController::class, 'show'])->name('sanpham.show');
// Route::post('/sanpham/{sanPham}/comments', [CommentController::class, 'store'])->name('comments.store');
// Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/admin',[AdminsSanPhamController::class,'index'])
->name('index')
->middleware(CheckRoleAdminMiddleware::class);
Route::resource('sanpham', AdminsSanPhamController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
