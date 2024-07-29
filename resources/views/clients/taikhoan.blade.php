@extends('layouts.client')
@section('content')
<div class="container toptoptop">
    <div class="row">
        <div class="col-md-3 menu_user dm2">
            <ul class="list-group">
                <div class="list-group-item active dm">
                    Xin chào <strong>{{ Auth::user()->name }}</strong>
                    <br>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline-block ml-3">
                        @csrf
                        <button type="submit" class="btn btn-outline-success btn-sm">Logout</button>
                    </form>
                </div>
                <li class="list-group-item"><a href="">Tài khoản</a></li>
                <li class="list-group-item"><a href="">Đơn hàng của bạn</a></li>
                <li class="list-group-item"><a href="">Lịch sử mua hàng</a></li>
                <li class="list-group-item"><a href="">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="col-9">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active">
                    <h5 class="tt">Tài khoản của bạn</h5>
                    <div class="col container1">
                        <form action="" method="post">

                            <div class="col mt-3">
                                <label for="validationDefault01" class="form-label">Họ & Tên</label>
                                <input name="name" type="text" class="form-control" id="validationDefault01"
                                    value="{{ Auth::user()->name}}">
                            </div>
                            <div class="col passss">
                                <label for="validationDefault01" class="form-label">Mật khẩu</label>
                                <i class="toggle-password fas fa-eye" ></i>
                                <input name="pass" type="password" class="form-control" id="passwordInput"
                                    value="">

                            </div>
                            <div class="col">
                                <label for="validationDefault01" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="validationDefault01"
                                    value="">
                            </div>
                            {{-- <div class="col">
                                <label for="validationDefault01" class="form-label">Địa chỉ</label>
                                <input name="diachi" type="text" class="form-control" id="validationDefault01"
                                    value="">
                            </div>
                            <div class="col">
                                <label for="validationDefault01" class="form-label">Số điện thoại</label>
                                <input type="text" name='tel' class="form-control" id="validationDefault01"
                                    value="">
                            </div> --}}
                            <div class="col-12 mb-5">
                                <input type="hidden" name="id" value="">
                                <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">

                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    
    /* css của danh mục sản phẩm */
    .dm {
        background-color: #ffffff !important;
        border: none !important;
        text-align: center;
        color: #000 !important;
        border-radius: 0% !important;
        padding: 30px 0 !important;
        margin-bottom: 10px;
    }

    .dm2 {
        width: 300px;
    }

    .dm2 ul li {
        border-radius: 0% !important;
        padding: 20px;
        font-size: 15px;
        text-transform: uppercase;
        background-color: #ffffff !important;
        border: none !important;
    }

    .dm2 li a {
        text-decoration: none !important;
        color: black;
    }

    .dm2 li a:hover {
        color: #ff0000;
        opacity: 0.7;
    }

    .dm2 li:hover {
        transform: scale(1.01);
        color: #d51b2e;
        border-right: 2px solid #FFA2A2;
        cursor: pointer;
    }
</style>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .btn-view {
        padding: 5px 10px;
        text-decoration: none;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .list-group-item {
        border-radius: 0 !important;
    }

    .menu_user {
        margin-top: 20px;
        border-top-left-radius: 0 !important;
        border-radius: none !important;
    }

    .list-group a {
        background-color: #ffffff !important;
    }

    ::placeholder {
        font-weight: 100;
    }

    span {
        color: red;

    }

    .tt {
        padding: 20px 30px;
        background-color: #ffffff;
        color: #373737;
        margin-top: 20px;
    }

    .container1 {
        background-color: #fff;
        margin-bottom: 0.5rem;
        border-radius: 3px;
        display: flex;
        justify-content: center;
    }

    .passss i {
        transform: translateY(5%);
        color: #777777;
        cursor: pointer;
    }

    .container1 input[type="submit"] {
        width: 90px;
        background-color: #F08383;
        border: none;
        border-radius: 3px;
        height: 40px;
        margin-bottom: 20px;
    }

    .container1 input[type="submit"]:active {
        background-color: rgb(167, 32, 32) !important;
    }

    .container1 input[type="submit"]:hover {
        background-color: rgb(232, 85, 85) !important;
    }

    .container1 input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 900px;
        margin-bottom: 20px;
        border-radius: 3px;
    }


    .container1 label {
        font-weight: 500;
    }

    .toptoptop {
        margin-top: 160px;
        margin-bottom: 30px;
    }

    .list-group-item-action {
        background-color: rgb(255, 255, 255) !important;
        color: #000 !important;
        border-left: none !important;
        border-top: none !important;
        border-bottom: none !important;
    }

    .list-group-item:focus {
        border-right: 3px solid #FFA2A2 !important;
        border-left: 1px solid #ccc !important;
        border-top: 1px solid #ccc !important;
        border-bottom: 1px solid #ccc !important;
    }
</style>
@endsection