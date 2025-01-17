@extends('layouts.admin')

@section('content')
    <div class="card my-5">
        <h4 class="card-header">{{ $title }}</h4>
        <div class="card-body">
            <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Mã sản phẩm:</label>
                    <input type="text" class="form-control @error('ma_san_pham') is-invalid @enderror" name="ma_san_pham" value="{{ old('ma_san_pham') }}" placeholder="Nhập mã sản phẩm">
                    @error('ma_san_pham')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control @error('ten_san_pham') is-invalid @enderror" name="ten_san_pham" placeholder="Nhập tên sản phẩm">
                    @error('ten_san_pham')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá sản phẩm:</label>
                    <input type="number" class="form-control @error('gia') is-invalid @enderror" name="gia" min="1" placeholder="Nhập giá">
                    @error('gia')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Số lượng:</label>
                    <input type="number" class="form-control @error('so_luong') is-invalid @enderror" name="so_luong" min="1" placeholder="Nhập số lượng">
                    @error('so_luong')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày nhập:</label>
                    <input type="date" class="form-control @error('ngay_nhap') is-invalid @enderror" name="ngay_nhap">
                    @error('ngay_nhap')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái:</label>
                    <select class="form-select @error('trang_thai') is-invalid @enderror" name="trang_thai">
                        <option value="" selected>Trạng thái</option>
                        <option value="1">Còn hàng</option>
                        <option value="0">Hết hàng</option>
                    </select>
                    @error('trang_thai')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Hình ảnh:</label>
                    <input type="file" class="form-control" name="hinh_anh" onchange="showImage(event)">
                </div>
                <img id="image_san_pham" src="" alt="Hình ảnh sản phầm" style="width: 200px; display: none">

                <div class="mb-3 d-flex justify-content-center">
                    <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function showImage(event) {
            const image_san_pham = document.getElementById('image_san_pham');

            const file = event.target.files[0];

            const render = new FileReader();

            render.onload = function() {
                image_san_pham.src = render.result;
                image_san_pham.style.display = 'block';
            }

            if (file) {
                render.readAsDataURL(file);
            }
        }
    </script>
@endsection