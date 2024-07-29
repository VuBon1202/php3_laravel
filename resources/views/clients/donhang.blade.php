@extends('layouts.client')

{{-- section dùng để định nghĩa nộn dung của section --}}

@section('content')
<div class="container">
    <div class="order-summary">
        <div class="thank-you">
            Cảm ơn quý khách đã đặt hàng tại shop <span class="check-mark">&#10003;</span>
        </div>

        <h2>Thông Tin Đơn Hàng và Khách Hàng</h2>

        <div class="section customer-details">
            <p><strong>Mã Đơn: </strong>
                BH02
            </p>
            <p><strong>Email: </strong>
                vuxuanbon12022004@gmail.com
            </p>
            <p><strong>Phương Thức Thanh Toán: </strong>
                    Thanh toán khi nhận hàng
            </p>

            <p><strong>Tên: </strong>
                Vũ Xuân Bốn
            </p>
            <p><strong>Địa Chỉ: </strong>
                Trực Thái
            </p>
            <p><strong>Số Điện Thoại: </strong>
                0353338918
            </p>
        </div>
        <div class="section customer-details">
            <a href="donhang.html" class="text-decoration-none text-dark">
                <p class="fs-4">Xem đơn hàng của bạn</p>
            </a>
        </div>

        <div class="section order-items">
            <h2>Chi Tiết Đơn Hàng</h2>
            <div class="item">
                <span>
                    Kem Chống Nắng
                </span>
                <span>X2</span>
                <span>
                    199.999đ
                </span>
                <strong class="text-danger">
                    398.000đ
                </strong>
            </div>
            <div class="item">
                <span>
                    Kem Dưỡng ẩm
                </span>
                <span>X1</span>
                <span>
                    199.999đ
                </span>
                <strong class="text-danger">
                    398.000đ
                </strong>
            </div>
            <p class="text-danger"><strong>Tổng Tiền: </strong>
                398.000đ
            </p>
        </div>
    </div>
</div>
<style>
    .order-summary {
        border: 1px solid #ddd;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 1500px;
        border-radius: 8px;
        margin-top: 160px;
        margin-left: auto;
        margin-right: auto;
    }

    h2 {
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        color: #5a5a5a;
        margin-bottom: 15px;
        font-size: 1.5em;
    }

    .section {
        margin-bottom: 20px;
    }

    .section a:hover p {
        color: #FFA2A2;
    }

    .section p {
        margin: 10px 0;
        line-height: 1.5;
    }

    .order-items,
    .customer-details {
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
    }

    .item {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
    }

    .item:last-child {
        border-bottom: none;
    }

    .item span {
        flex: 1;
    }

    .item strong {
        margin-left: 10px;
        color: #000000;
    }

    .thank-you {
        text-align: center;
        margin-top: -10px;
        margin-bottom: 20px;
        font-weight: bold;
        color: #FFA2A2;
        font-size: 1.8em;
    }

    .check-mark {
        color: #FFA2A2;
    }
</style>
@endsection