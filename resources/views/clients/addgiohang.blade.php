
@extends('layouts.client')

{{-- section dùng để định nghĩa nộn dung của section --}}

@section('content')
<div class="container top-top-dki">
    <div class="col mt-3">
        <a href="index.html" class="text-decoration-none text-dark uiui">Trang chủ</a> / <span
            class="text-danger">Giỏ
            hàng</span>
    </div>
    <style>
        .top-top-dki {
            margin-top: 160px
        }

        body {
            background-color: #F3F3F6;
        }
    </style>
    <div class="container px-3 my-5 clearfix">
        <div class="card">
            <div class="card-header">
                <h3>GIỎ HÀNG</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <th class="text-center py-3 px-4" style="width: 300px;">Ảnh sản phẩm</th>
                                <th class="text-center py-3 px-4" style="width: 300px;">Tên sản phẩm</th>
                                <th class="text-center py-3 px-4" style="width: 170px;">Giá</th>
                                <th class="text-center py-3 px-4" style="width: 60px;">Số lượng</th>
                                <th class="text-center py-3 px-4" style="width: 170px;">Tổng giá</th>
                                <th class="text-center py-3 px-4" style="width: 20px;">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                            <tr>
                                <td class="p-4">
                                    <div class="media align-items-center d-flex">
                                        <img src="{{ Storage::url($item['hinh_anh']) }}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                                    </div>
                                </td>
                                <td class="p-4">
                                    <div class="media align-items-center d-flex">
                                        <div class="media-body">
                                            <a href="" class="text-dark d-block mx-4 text-decoration-none">{{$item['ten_san_pham']}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center font-weight-semibold align-middle p-4">{{$item['gia']}}đ</td>
                                <td class="align-middle p-4 text-center">{{$item['so_luong']}}</td>
                                <td class="text-center font-weight-semibold align-middle p-4 text-danger">{{$item['total']}}đ
                                </td>
                                <td class="text-center align-middle px-0"><a href="/delcart/{{$item['id']}}"
                                        class="shop-tooltip close float-none text-danger text-decoration-none fs-6">X</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="mt-4">
                        <input type="hidden" class="form-control">
                    </div>
                    <div class="d-flex">
                        <div class="text-right mt-4">
                            <label class="text-muted font-weight-normal m-0">Tổng đơn</label>
                            <div class="text-large"><strong>{{$tong}}đ</strong></div>
                        </div>
                    </div>
                </div>

                <div class="float-right">
                    <div>
                        <a href="{{ route('bill') }}">Thanh toán</a>
                    </div>
                    <div class="ok">
                        <a href="{{ route('home') }}">Tiếp tục mua sắm</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    .media img {
        width: 80px !important;
    }

    .float-right a {
        padding: 10px;
        background-color: #FFA2A2;
        text-decoration: none;
        color: #fff;
        float: right;
        margin-left: 10px;
        border-radius: 3px;
        border: 1px solid #FFA2A2;
    }

    .float-right a:hover {
        border: 1px solid #FFA2A2;
        background-color: #fff;
        color: #FFA2A2
    }

    .ui-w-40 {
        width: 40px !important;
        height: auto;
    }

    .card {
        box-shadow: 0 1px 15px 1px rgba(52, 40, 104, .08);
    }

    .ui-product-color {
        display: inline-block;
        overflow: hidden;
        margin: .144em;
        width: .875rem;
        height: .875rem;
        border-radius: 10rem;
        -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
        vertical-align: middle;
    }
</style>
@endsection
