<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOUR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <style>
        body {
            background-color: #f2f6f6 !important;
        }

        .trangheader-fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #ffa2a2;
            z-index: 500;
            transition: top 0.5s;
        }
    </style>
    <div class="trangheader-fixed" id="siteHeader">
        <section class="myheader">
            <div class="container paddingg">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2">
                        <a href="{{ route('home') }}"><img src={{ asset('storage/images/b.jpg') }} style="max-width: 100%; height: 65px;"
                                class="img-fluid" alt=""></a>
                    </div>
                    <!-- search -->
                    <div class="col-md-4">
                        <form action="seacher" method="POST" class="css input-group mb-3 mt-2 pt-2 focus-input-search">
                            <input type="text" name="kyw" class="form-control search"
                                placeholder="Bạn muốn tìm kiếm gì?" aria-label="Tìm kiếm sản phẩm"
                                aria-describedby="basic-addon2">
                            <button class="input-group-text" type="submit" id="basic-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                            <style>
                                .mymainmenu {
                                    background-color: #f08383 !important;
                                }
                            </style>
                        </form>
                    </div>
                    <!-- support -->
                    <div class="col-md-4 mt-2">
                        <div class="row">
                            <div class="col">
                                <div class="row ps-5">
                                    <div class="col-2 ps-2">
                                        <div class="fs-3 text-white">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-10 ps-3">
                                        <a href="#" class="text-decoration-none text-white">Hotline & Zalo
                                        </a><br>
                                        <p class="text-white">0345.49.72.82</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="row pe-6">
                                    <div class="col-2">
                                        <div class="fs-3 text-white">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <a href="" class="text-decoration-none text-white">Xin
                                            chào!</a><br>
                                        <a href="{{ route('dangnhap') }}" style="    text-decoration: none;">
                                            <p class="text-white fs-6">{{ Auth::user()->name}}</p>
                                        </a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sign in -->
                    <div class="col-md-2 pt-2 d-flex mt-2">
                        <div class="row">
                            <div class="col"><a href="{{ route('giohang') }}" class="position-relative ms-1">
                                    <span><i class="fa-solid fa-cart-shopping text-white fs-4"></i></span>

                                </a></div>
                            <div class="col"><a href="#" class="position-relative ms-2">
                                    <span><i class="fa-solid fa-heart text-white fs-4"></i></span>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mymainmenu bg-danger">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg bg-danger hovermenu paddddd">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 cangiua">
                                        <div class="category">
                                            <li class="nav-item text-white mt-2">

                                                <i class="fa-solid fa-bars-staggered"></i> Danh mục <span></span>
                                                <div class="product-list">
                                                    <ul>
                                                        <li><a href="{{ route('sanphama') }}">Tất cả sản phẩm</a></li>
                                                        <li><i class="fa-solid fa-play"></i>
                                                            <a href="">
                                                                Kem chống nắng
                                                            </a>
                                                        </li>
                                                        <li><i class="fa-solid fa-play"></i>
                                                            <a href="">
                                                                Son môi
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                        </div>
                                        <li class="nav-item">
                                            <a class="nav-link active text-white px-4" aria-current="page"
                                                href="  {{ route('home') }}">Trang
                                                chủ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="{{ route('about') }}">Giới
                                                thiệu</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-white px-4" href=""
                                                data-bs-toggle="dropdown">
                                                Sản phẩm
                                            </a>
                                            <ul class="dropdown-menu active-menuu">
                                                <li><a class="dropdown-item" href="{{ route('sanphama') }}">Tất cả sản
                                                        phẩm</a></li>

                                                <style>
                                                    .active-menuu li a:active {
                                                        background-color: none !important;
                                                    }

                                                    .active-menuu li a:hover {
                                                        background-color: rgb(247, 207, 207) !important;
                                                    }

                                                    .paddingg {
                                                        padding: 10px;
                                                    }
                                                </style>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="{{ route('post') }}">Tin tức</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="{{ route('lienhe') }}">Liên hệ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="{{ route('chinhsach') }}">Chính
                                                sách</a>
                                        </li>
                                    </ul>
                                    <style>
                                        .paddddd {
                                            padding: 2px !important;
                                            background-color: #F08383 !important;
                                        }

                                        .cangiua {
                                            margin-left: -14px !important;
                                        }
                                    </style>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .product-list {
                max-height: 0;
                overflow: hidden;
                transition: 0.3s ease-in-out;
                position: absolute;
            }

            .category:hover .product-list {
                max-height: 1000px;
            }

            .product-list ul {
                padding: 0;
                width: 245px;
                margin: 0;
            }

            .product-list ul li a {
                text-decoration: none;
                color: #000;
            }

            .product-list ul li {
                padding: 10px 10px;
                list-style: none !important;
                border-bottom: 1px solid #ccc;
            }

            .category span {
                margin-left: 150px;
                border-right: 2px solid #fff;
            }

            .product-list li:hover {
                background-color: #FFA2A2 !important;
                color: #fff !important;
            }

            .category:hover .product-list {
                margin-top: 5px;
                display: block;
                position: absolute;
                background-color: #fff;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.544);
                border-radius: 5px;
            }

            .category {
                position: relative;
                display: inline-block;
                cursor: pointer;
                margin-right: 40px;
            }
        </style>
    </div>