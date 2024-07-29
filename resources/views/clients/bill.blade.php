@extends('layouts.client')

{{-- section dùng để định nghĩa nộn dung của section --}}

@section('content')

<div class="container top-top-dki">
    <form action="dhthanhcong.html" method="post">
        <div class="row mt-5 mb-5">
            <div class="col-8 bg-white css-bg-thanhtoan">
                <a href="index.php" class="mt-3 mb-3">Four Beautify</a>
                <div class="row">
                    <div class="col-6"> <!--  Thông tin khách hàng -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Thông tin nhận hàng</p>
                            </div>
                        </div>

                        <div class="thongtininput mb-3">
                            <input type="text" name="hoten" value="Vũ Xuân Bốn">
                        </div>
                        <div class="thongtininput mb-2">
                            <input type="email" name="email" value="vuxuanbon12022004@gmail.com">
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" name="sodienthoai" value="0353338918">
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" name="diachi" placeholder="Địa chỉ" value="Nam Định">
                        </div>

                        <div class="thongtininput mt-3 mb-2">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                        </div>
                        


                    </div>
                    <div class="col-6">
                        <div class="row ms-2 mt-3">
                            <div class="col">
                                <div class="section payment-method">
                                    <p>Phương Thức Thanh Toán</p>
                                    <div class="payment-method">
                                        <div class="payment-option">
                                            <input type="radio" id="onlinePayment" name="pttt" value="1">
                                            <label for="onlinePayment">Thanh toán online</label>
                                        </div>

                                        <div class="payment-option">
                                            <input type="radio" id="cashOnDelivery" name="pttt" value="0">
                                            <label for="cashOnDelivery">Thanh toán khi nhận hàng</label>
                                        </div>
                                    </div>
                                    <style>
                                        .payment-method {
                                            display: flex;
                                            background-color: #fff;
                                            border: 1px solid #ccc;
                                            border-radius: 8px;
                                            padding: 20px;
                                            margin-top: 42px;
                                        }

                                        .payment-option {
                                            margin: 0 20px;
                                            text-align: center;
                                        }

                                        input[type="radio"] {
                                            display: none;
                                        }

                                        label {
                                            cursor: pointer;
                                            padding: 10px;
                                            border-radius: 5px;
                                            transition: background-color 0.3s;
                                            display: block;
                                        }

                                        input[type="radio"]:checked+label {
                                            background-color: #FFA2A2;
                                            color: #fff;
                                        }

                                        label:hover {
                                            background-color: #FFA2A2;
                                            color: #fff;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 container-cttt-ctn">
                <div class="sidebar-header">
                    <P>Đơn hàng của quý khách</P>
                </div>

                <div class="sidebar-cont">
                    <div class="ctttdonhang">
                        <div class="row">
                            <div class="product">
                                <img src="img/sanpham/sp3.png">
                                <h6></h6>
                                <div class="product-details">
                                    <p>Kem dưỡng ẩm</p>
                                    <p>2</p>
                                </div>
                            </div>
                            <div class="product">
                                <img src="img/sanpham/sp4.png">
                                <h6></h6>
                                <div class="product-details">
                                    <p>Kem dưỡng ẩm</p>
                                    <p>1</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="cttt-price">
                    <div class="row">
                        <div class="col-5 cttt-price-text">
                            <p>Tạm tính</p>
                        </div>

                        <div class="col-7 cttt-price-gia">
                            <div class="ppp">
                                <p>199.***đ</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="cttt-tongtatca">
                    <div class="row">
                        <div class="col-6 ttt-ten mt-2">
                            <p>Tổng cộng</p>
                            <a href="addgiohang.html"><i class="fa-solid fa-chevron-left"></i> Quay về giỏ
                                hàng</a>
                        </div>
                        <div class="col-6 thanhtien-tongtatca">
                            <p></p>
                            <button type="submit" name="thanhtoandh"><a href="{{ route('donhang') }}" class="text-dark text-decoration-none">Đặt mua</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>

</div>
<style>
    .payment-method {
        display: flex;
        flex-direction: column;
    }

    .payment-method label {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .payment-method input {
        margin-right: 10px;
    }

    .product-container {
        max-height: 400px;
        overflow-y: auto;
        border: 1px solid #ccc;
        padding: 10px;
    }


    .product p {
        margin-left: 0px !important;
    }

    .product {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border: 1px solid #ddd;
    }

    .top-top-dki {
        margin-top: 160px
    }

    .cttt-tongtatca {
        padding: 10px;
    }

    .cttt-tongtatca .thanhtien-tongtatca p {
        margin-left: 80px;
        color: #DC3545;
        font-size: 22px;
    }

    .cttt-tongtatca .thanhtien-tongtatca button {
        margin-left: 89px;
        color: #ffffff;
        background-color: #F08383;
        border: none;
        outline: none;
        margin-top: 25px;
        padding: 10px;
        border-radius: 4px;
        width: 100px;
    }

    .cttt-tongtatca .thanhtien-tongtatca button:hover {
        background-color: #fff;
        color: #DC3545;
        border: 1px solid #DC3545;
    }

    .cttt-tongtatca .ttt-ten p {
        font-size: 18px !important;
        color: #2f2f2f;
        margin-left: 28px;
        margin-bottom: 45px;
    }

    .cttt-tongtatca .ttt-ten a {
        font-size: 15px !important;
        color: #2f2f2f;
        margin-left: 28px;
        text-decoration: none;
        margin-top: 30px !important;
    }

    .cttt-tongtatca .ttt-ten a:hover {
        color: #DC3545;
    }

    .cttt-price .cttt-price-text p {
        font-size: 15px !important;
        color: #868686;
        margin-left: 28px;
    }

    .cttt-price .cttt-price-gia p {
        font-size: 15px !important;
        color: #868686;
        font-weight: 300;
    }

    .cttt-price .cttt-price-gia p {
        margin-left: 169px;
    }

    .cttt-price .ppp p {
        margin-left: 150px !important;
    }

    .cttt-price {
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .sidebar-cont {
        padding: 10px;
    }

    .sidebar-cont .ctttdonhang {
        padding: 10px;
    }

    .sidebar-cont .ctttdonhang img {
        max-width: 100px;
    }

    .ctttdonhang {
        border-bottom: 1px solid #ccc;
    }
    .ctttdonhang .sb-ct-price p {
        margin-bottom: 0;
        font-size: 15px !important;
        color: #868686;
        margin-left: 20px;
        margin-top: 40px;
    }

    .container-cttt-ctn {
        padding: 0 !important;
        margin: 0 !important;
        background-color: rgb(245, 245, 245);
        border: 1.5px solid #ccc;
    }

    .container-cttt-ctn .sidebar-header p {
        border-bottom: 1.5px solid #ccc;
        padding: 20px;
        margin-bottom: 0 !important;
    }
    .css-bg-thanhtoan a {
        font-size: 30px;
        text-decoration: none;
        color: #F08383;
        font-weight: 700;
        cursor: pointer;
    }

    .css-bg-thanhtoan a:hover {
        color: #a81927;
    }

    .ngdung-tt p {
        font-size: 16px !important;
        margin-left: 7px;
    }

    .ngdung-tt i {
        margin-top: 5px;
        margin-left: 45px;
    }

    .ngdung-tt {
        display: flex;
        justify-content: center;
        padding: 0;
    }

    .thongtininput input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #ccc;
    }

    .thongtininput textarea {
        width: 100%;
        padding: 5px 10px;
        height: 100px;
        outline: none;
        border: 1px solid #ccc;
        color: #6b6b6b;
    }
</style>
@endsection
