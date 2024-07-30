<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class cartController extends Controller
{
    protected $cart;

    public function __construct()
    {
        if (!Session::has('cart')) {
            $this->cart = [];
            Session::put('cart', $this->cart);
        }
    }
    public function  index(){ //code nay de em show trang cart
        $cart = Session::get('cart', []);
        $tong=0;
        foreach ($cart as $key => $value) {
            $tong+=$value['total'];
        }
        return view('clients.addgiohang', compact('cart','tong'));
    }

    public function addCart(Request $request){ //code nay de em them san pham vao cart
        $products = $request->product;
        $product = json_decode($products);
        $check = true;
        $cart = Session::get('cart', []);
        if (count($cart) > 0) {
            foreach ($cart as $key => $value) {
                if ($value['id'] == $product->id) {
                    $cart[$key]['so_luong'] = $cart[$key]['so_luong'] + $request->so_luong;
                    $cart[$key]['total'] = $cart[$key]['so_luong'] * $cart[$key]['gia'];
                    Session::put('cart', $cart);
                    $check = false;
                    break;
                }
            }
            if ($check) {
                $cart[] = ['id' => $product->id, 'hinh_anh' => $product->hinh_anh, 'ma_san_pham' => $product->ma_san_pham, 'ten_san_pham' => $product->ten_san_pham, 'gia' => $product->gia, 'so_luong' => $request->so_luong,'total'=>$request->so_luong * $product->gia];
                Session::put('cart', $cart);
            }
        } else {
            $cart[] = ['id' => $product->id, 'hinh_anh' => $product->hinh_anh, 'ma_san_pham' => $product->ma_san_pham, 'ten_san_pham' => $product->ten_san_pham, 'gia' => $product->gia, 'so_luong' => $request->so_luong,'total'=>$request->so_luong * $product->gia];
            Session::put('cart', $cart);
        }
        return redirect('/cart');
    }
    function delCart($id) // code nay de em xoa san pham trong cart
    {
        $cart = Session::get('cart', []);
        foreach ($cart as $key => $item) {
            if ($item['id'] == $id) {
                unset($cart[$key]);
                Session::put('cart', $cart);
                break;
            }
        }
        return redirect('/cart');
    }
}
