{{-- extends dùng để kế thừa layout --}}
@extends('layouts.client')

{{-- section dùng để định nghĩa nộn dung của section --}}

@section('content')
<section class="mymaincontent my-3">
    <div class="Slide_Home">
        <div class="row">
            <div class="col no-paddding-lide">
                <div class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/images/banner1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src={{ asset('storage/images/banner2.jpg') }} class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/banner3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="    width: 80%;">
        <div class="noidung mt-5 mb-3">
            <nav>
                <div class="nav nav-tabs mt-4 baiviet" id="nav-tab" role="tablist">
                    <p class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sản phẩm mới</p>
                </div>
            </nav>

        </div>
        <div class="row">
            <!-- Hiển thị sản phẩm -->
            <div class="row">
        <!-- Hiển thị sản phẩm -->
        @foreach ($products as $product)
            <div class="col-md-3 m-4">
                <div class="card ">
                    <span class="percent">20%</span>
                    <div class="card-image">
                        <a href="{{ route('chitietsp', $product->id) }}">
                            <img src="{{ Storage::url($product->hinh_anh) }}" alt="Hình ảnh sản phẩm" class="img-fluid">
                        </a>
                    </div>
                    <div class="p-3">
                        <a class="mb-0 text-danger" style="text-decoration: none;">
                            {{ $product->gia }}
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
    </div>
    <div class="post-content">
        <nav>
            <div class="nav nav-tabs mt-4 baiviet" id="nav-tab" role="tablist">
                <p class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tin tức mới nhất</p>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="row mx-5">
                    <div class="col-md-3 my-4 d-flex justify-content-center">
                        <a href="tintuc.html" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-luvkal3mybde11" class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h4 class="card-title ">
                                        Sản phẩm nghiên cứu
                                    </h4>
                                    <p class="card-text">
                                        Một sản phẩm đến từ thiên nhiên
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        
    </div>
    </div>
    <style>
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

        .product-content {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .card {
            height: 100%;
            width: 300px;
            border: 1px solid #fff;
        }

        .card-image img {
            width: 300px;
            padding: 1px;
        }
        .mymaincontent {
            margin-top: 137px !important;
        }
        .baiposs {
            text-decoration: none;
            color: #000000;
        }
        .baiposs:hover p {
            color: #F08383;
        }
        .baiviet p {
            color: #ffffff !important;
            background-color: #F08383 !important;
        }
    </style>
    </div>
    </div>
@endsection
