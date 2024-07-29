
@extends('layouts.client')

{{-- section dùng để định nghĩa nộn dung của section --}}

@section('content')
<div class="containersp">
    <div class="dieuhuong mb-4">
        <div class="dhmenu mb-3">
            <div class="col-md-9 mt-3 mb-4 iconcsss">
                <a href="index.html" class="text-decoration-none text-dark">Trang chủ</a> <i
                    class="fa-solid fa-chevron-right"></i> <span class="text-danger">Tất cả sản phẩm</span>
                <style>
                    .iconcsss i {
                        font-size: 14px;
                        color: #989898;
                        margin-left: 5px;
                        margin-right: 5px;
                    }

                    .iconcsss {
                        margin-left: -23px;
                    }
                </style>
            </div>
            <style>
                .dhmenu {
                    margin-left: 150px;
                }

                body {
                    background-color: #e6e6f1;
                }

                select {
                    padding: 5px;
                    border: 1px solid #FFA2A2;
                    color: #ffa2a2;
                    appearance: none;
                    /* Ẩn mũi tên mặc định của select box */
                    outline: none;
                    border-radius: 5px;
                }
            </style>
        </div>
        <div class="row">
            <div class="wrapper mb-3">
                <div class="d-md-flex align-items-md-center">
                    <div class="h3">Tất cả sản phẩm</div>
                </div>
                <div class="d-lg-flex align-items-lg-center pt-2">
                    <div class="d-flex align-items-center my-2 bg-light border mx-lg-2">
                        <form action="#" method="post">
                            <select name="price_range">
                                <option value="" hidden>Sắp xếp</option>
                                <option value="newest">Sản phẩm mới nhất</option>
                                <option value="oldest">Sản phẩm cũ nhất</option>
                            </select>
                    </div>
                </div>
                <div class="py-md-0 py-3">
                    <section id="sidebar">
                        <div class="py-3 fon_checkbox">

                            <h5 class="font-weight-bold">Giá</h5>
                            <div class="form-inline d-flex align-items-center py-1">
                                <label class="tick">Dưới 300.000đ
                                    <input type="checkbox" name="price_range" value="1"><span class="check"></span>
                                </label>
                            </div>
                            <div class="form-inline d-flex align-items-center py-1">
                                <label class="tick">Từ 300.000đ - 500.000đ
                                    <input type="checkbox" name="price_range" value="2"><span class="check"></span>
                                </label>
                            </div>
                            <div class="form-inline d-flex align-items-center py-1">
                                <label class="tick">Từ 500.000đ - 700.000đ
                                    <input type="checkbox" name="price_range" value="3"><span class="check"></span>
                                </label>
                            </div>
                            <div class="form-inline d-flex align-items-center py-1">
                                <label class="tick">Từ 700.000đ - 1.000.000đ
                                    <input type="checkbox" name="price_range" value="4"><span class="check"></span>
                                </label>
                            </div>
                            <div class="form-inline d-flex align-items-center py-1">
                                <label class="tick">Trên 1.000.000đ
                                    <input type="checkbox" name="price_range" value="5"><span class="check"></span>
                                </label>
                            </div>
                            <input type="submit" value="Lọc sản phẩm" name="locgia_sp">
                            </form>
                        </div>
                    </section> 
                </div>
                <div class="container">
    <div class="row">
        <!-- Hiển thị sản phẩm -->
        @foreach ($items as $product)
            <div class="col-md-3 mb-4 m-3">
                <div class="card">
                    <span class="percent">20%</span>
                    <div class="card-image">
                        <a href="{{ route('chitietsp', $product->id) }}">
                            <img src="{{ Storage::url($product->hinh_anh) }}" alt="Hình ảnh sản phẩm" class="img-fluid">
                        </a>
                    </div>
                    <div class="p-3">
                        <a class="mb-0 text-danger" style="text-decoration: none;">
                            99.999đ
                        </a>
                        <div class="price">
                            <span>{{ $product->ten_san_pham }}</span>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-between align-items-center">
                        <a href="{{ route('chitietsp', $product->id) }}" class="btn btn-outline-info" style="margin-left: 20px;margin-bottom: 20px;">
                            Mua ngay
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        {{-- Hiển thị phân trang --}}
        {{ $items->links('pagination::bootstrap-5') }}
    </div>
</div>

                
            </div>
        </div>
    </div>
</div>


<style>
    .fon_checkbox label {
        font-size: 15px;
    }
   

    .padddding {
        margin-top: -95px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
    .percent {
        width: 63px;
        height: 30px;
        position: absolute;
        background: #F08383;
        color: #fff;
        border-radius: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        right: 0;
        border-bottom-left-radius: 15px;
        padding: 10px;
    }   
    .cantrai a {
        text-decoration: none;
        color: #000000;
    }
    .card {
        margin-bottom: 20px;
        background-color: #F2F6F6;
        width: 250px;
        border: 1px solid #fff !important;
    }

    .card-image {
        padding-bottom: 30px;
        padding-top: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-top: 1px solid #e9e9e9;
        border-left: 1px solid #e9e9e9;
        border-right: 1px solid #e9e9e9;
    }

    .card-image img {
        padding: 1px;

    }

    .card-inner {
        padding: 10px 20px;
    }

    .card-inner p {
        font-size: 16px;
        color: #FFA2A2;
        font-weight: 500;
    }

    .price span {
        color: #000000;
        font-weight: 600;
        font-size: 17px;
        padding-left: 20px;
    }

    .price sup {
        color: rgb(133, 133, 133);
        font-weight: 100;
        font-size: 14px;
        top: -3px;
        text-decoration: line-through;
    }

    .details {
        background-color: #FFA2A2;
        color: #fff !important;
        border-radius: 10px;
        width: 90px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 20px;
    }
    .containersp {
        max-width: 1508px;
        margin-top: 160px;
    }

    .wrapper {
        padding: 30px;
        max-width: 1370px;
        margin: 0 auto;
        background-color: #fff;
    }
    .btn:hover {
        color: #FFA2A2;
    }

    div.text-muted {
        font-size: 0.85rem;
    }

    #sidebar {
        width: 20%;
        float: left;
    }

    .category {
        font-size: 0.9rem;
        cursor: pointer;
    }

    .list-group-item {
        border: none;
        padding: 0.3rem 0.4rem 0.3rem 0rem;
    }

    .badge-primary {
        background-color: #fff5f5;
        color: #FFA2A2;
    }

    .brand .check {
        background-color: #fff;
        top: 3px;
        border: 1px solid #666;
    }

    .brand .tick {
        font-size: 1rem;
        padding-left: 25px;
    }

    .rating .check {
        background-color: #fff;
        border: 1px solid #666;
        top: 0;
    }

    .rating .tick {
        font-size: 0.9rem;
        padding-left: 25px;
    }

    .rating .fas.fa-star {
        color: #ffbb00;
        padding: 0px 3px;
    }

    .brand .tick:hover input~.check,
    .rating .tick:hover input~.check {
        background-color: #f9f9f9;
    }

    .brand .tick input:checked~.check,
    .rating .tick input:checked~.check {
        background-color: #FFA2A2;
    }

    .product .fa-star {
        font-size: 0.9rem;
    }

    img {
        width: 192px;
        height: 132px;
        object-fit: contain;
    }
</style>
@endsection