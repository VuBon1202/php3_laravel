@extends('layouts.client')

{{-- section dùng để định nghĩa nộn dung của section --}}

@section('content')
<div class="container margin-fixeeed "style="    margin-top: 150px;">
    <div class="col-md-9 mt-3 mb-4 iconcsss">
        <a href="index.html" class="text-decoration-none text-dark">Trang chủ</a> <i
            class="fa-solid fa-chevron-right"></i> <span class="text-danger">Sản phẩm
            chi tiết</span>
        <style>
            .number-input {
                border: 1px solid #ccc;
                display: inline-flex;
            }

            .number-input,
            .number-input * {
                box-sizing: border-box;
            }

            .number-input button {
                outline: none;
                background-color: transparent;
                border: none;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 20px;
                cursor: pointer;
                margin: 0;
                position: relative;
            }

            button[class='plus']::after {
                display: inline-block;
                position: absolute;
                font-weight: 100;
                font-size: 17px;
                font-family: "Font Awesome 5 Free";
                content: '\002B';
                transform: translate(-50%, -30%) rotate(180deg);
            }
            .number-input input[type=number] {
                font-family: sans-serif;
                max-width: 50px;
                padding: .5rem;
                border: solid #ccc;
                border-radius: 0%;
                border-width: 0 1px;
                font-size: 18px;
                height: 30px;
                text-align: center;
            }
        </style>
    </div>
    <form action="addgiohang.html" method="post">
        @csrf
        <div class="row mb-5 boxctiet1">
            <div class="col-md-5">
                <div >
                        <img class="w-100" src="{{ Storage::url($product->hinh_anh) }}" alt="Ảnh 1">
                </div>
            </div>
            <div class="col-md-6 boxctiet card">
                <h4>
                    <p>
                        {{ $product->ten_san_pham }}
                    </p>
                </h4>
                <div>
                    <b class="fs-4 text-danger me-2">
                        {{ $product->gia}}
                    </b>
                </div>

                <div class="cart rounded-2" style="background-color: #FFA2A2;">
                    <div >
                        <span style="padding-left: 20px;"><i class="fa-solid fa-gift"></i> Khuyến mãi ưu đãi</span>
                    </div>
                    <div style="padding-left: 20px;">
                        <p> Tặng ngay ưu đãi cực sốc</p>
                        <p> Tặng phiếu mua sắm 500.000đ</p>
                    </div>
                </div>
                <div class="row mt-2 mb-3 chu-tieude">
                    <div class="soluong mt-6 mb-2">
                        <h6>Số lượng</h6>
                        <div class="number-input">
                            <button onclick="decrement()" class="decrement" type="button">-</button>
                            <input name="quantityy" min="0" value="1" type="number" id="quantity1">
                            <button onclick="increment()" class="increment" type="button">+</button>
                            <script>
                                function increment() {
                                    var input = document.getElementById('quantity1');
                                    input.stepUp();
                                }
                                function decrement() {
                                    var input = document.getElementById('quantity1');
                                    input.stepDown();
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row btn-muahang mt-2 mb-2">
                    <div class="col-3 btt22"><button class="btn btn-outline-primary"><a href="{{ route('giohang') }}" class="text-decoration-none text-dark">Mua ngay</a><br></button></div>
                </div>
            </div>
        </div>
    </form>
    <div class="row chitiettexxt mb-4">
        <div class="col-md-9">
            <h4>Chi tiết sản phẩm</h4>
            <hr>
            <p>Thông tin sản phẩm
                [SKINAVIS OFFICIAL] Kem chống nắng Skinavis - Skinavis sunscreen defense – Phổ rộng, không lên tone
                da
                Kem chống nắng Skinavis defense là kem chống nắng phổ rộng, giúp bảo vệ da khỏi tác hại từ tia UV
                ánh
                nắng mặt trời.
                <br><br>
                Ưu điểm:
                Kem chống nắng dạng Cream giúp bổ sung độ ẩm cho da nhưng lại khô thoáng, không gây bí da.
                Không chứa thành phần tạo màu, an toàn với da. Kem chống nắng không màu giúp bạn có cảm giác căng
                bóng
                thay vì có màu như phấn trang điểm. Phù hợp với những bạn muốn giữ màu da tự nhiên hoặc make up thêm
                để
                tạo cá tính riêng.
                <br><br>
                Chỉ định:
                Da thường, da không có nhiều mụn viêm mủ.
                Phù hợp với cả da dầu, da khô, da hỗn hợp
                <br><br>
                Hướng dẫn sử dụng:
                Thoa trước khi tiếp xúc với ánh nắng 5-10 phút. Lấy lượng kem vừa đủ , chấm nhiều điểm và vỗ đều
                bằng ba
                ngón tay 30-45 giây để kem chống nắng được tán đều lên mặt.
                <br><br>
                Lưu ý: Không nên thoa khi da đang quá ướt.
                Định lượng: 1,5 – 2 đốt ngón tay cho vùng mặt. Vùng cổ: 0,5-1 đốt ngón tay ( FTU)
                Nên thoa dặm lại 2-4 lần / ngày tùy vào công việc của bạn ở trong nhà mát hoặc đi lại ngoài trời,
                <br><br>
                Dung tích: 70ml
                <br><br>
                Thành phần chính:
                Avobenzone: Butyl Methoxydibenzoylmethane : Màng lọc UVA1 ( UVA bước sóng dài gây lão hóa da )
                Octocrylene: Màng lọc UVC, UVB, UVA2
                Ethylhexyl Methoxycinnamate: Màng lọc UVB
                Ethylhexyl Salicylate: Màng lọc UVB
                Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine: Màng lọc UVB và UVA2
                <br><br>
            </p>
            <b>Đánh giá sản phẩm</b>
            <div class="container my-5 py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="card text-dark">
                            <div class="card-body p-4">

                                <h4 class="mb-0">Bình luận sản phẩm</h4>
                                <form action="{{ route('comments.store', $product->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="content" class="form-control" placeholder="Hãy để lại đánh giá cho sản phẩm của chúng tôi" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-2">Đăng</button>
                                </form>


                                <p class="fw-light mb-4 pb-2 mt-3">Phần bình luận mới nhất của người dùng</p>
                                <div class="d-flex flex-start">
                                    @if($product->comments->isEmpty())
                                    <p>Chưa có bình luận.</p>
                                    @else
                                    @foreach($product->comments as $comment)
                                    <div class="card-body p-2" style="    background-color: aliceblue;">
                                        <h6 class="fw-bold mb-1">{{ $comment->user->name }}</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0">
                                                <span class="badge bg-primary">Ngày đăng:</span>
                                                {{ $comment->created_at }}
                                            </p>
                                        </div>
                                        <p class="mb-0">
                                            {{ $comment->content }}
                                        </p>
                                    </div>@endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 okk">
            <div class="nav nav-tabs mt-4 oko" id="nav-tab" role="tablist">
                <p class="nav-link active">Sản phẩm liên quan</p>
                <div class="row tintucc">
                    <div class="col-md-4"><a href="#"><img
                                src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lt3ctquhqzt00d"
                                alt=""></a></div>
                    <div class="col-md-8">Kem chống nắng
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lt3ctquhqzt00d"
                                alt=""></a></div>
                    <div class="col-md-8">Kem chống nắng
                        <br><b class="text-danger fs-6">95.000đ</b>
                    </div>
                </div>
            </div>
            <style>
                .chitiettexxt {
                    padding: 20px;
                    background-color: #fff;
                }
            </style>
        </div>
        <style>
            .okk {
                margin-top: -25px !important;
            }
            .tintucc img {
                max-width: 90px;
                height: auto;
            }
            .tintucc a {
                text-decoration: none;
                color: black;
            }
            .tintucc {
                padding: 10px;
            }
            .oko p {
                background-color: #FFA2A2 !important;
                color: #fff !important;
                border-radius: 5px !important;
                width: 500px;
                border: none !important;
            }
            .oko {
                background-color: #f9f9f9;
            }
        </style>
    </div>
</div>
</div>
</div>
@endsection