@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between mt-1">
    <a href="{{ route('sanpham.create') }}" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addProductModal">Thêm sản phẩm</a>
    <form action="" method="get" class="d-flex">
        <div class="input-group me-2">
            <select name="searchTrangThai" id="searchTrangThai" class="form-select">
                <option selected>Chọn trạng thái</option>
                <option value="0" {{ request('searchTrangThai') == '0' ? 'selected' : '' }}>Hết hàng</option>
                <option value="1" {{ request('searchTrangThai') == '1' ? 'selected' : '' }}>Còn hàng</option>
            </select>
        </div>
        <input type="text" class="form-control me-2" name="search" placeholder="Tìm kiếm" value="{{ is_array(request('search')) ? '' : request('search') }}">
        <button class="btn btn-danger">Tìm kiếm</button>
    </form>         
</div>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Ngày nhập</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listSanPham as $index => $sanPham)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>
                <img src="{{ Storage::url($sanPham->hinh_anh) }}" width="150px" alt="Hình ảnh sản phẩm">
            </td>
            <td>{{ $sanPham->ma_san_pham }}</td>
            <td>{{ $sanPham->ten_san_pham }}</td>
            <td>{{ $sanPham->gia }}</td>
            <td>{{ $sanPham->so_luong }}</td>
            <td>{{ $sanPham->ngay_nhap }}</td>
            <td>{{ $sanPham->trang_thai == 1 ? 'Còn hàng' : 'Hết hàng' }}</td>
            <td>
                <a href="{{ route('sanpham.show', $sanPham->id) }}" class="btn bg-secondary text-light">Chi tiết</a>
                <a href="{{ route('sanpham.edit', $sanPham->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('sanpham.destroy', $sanPham->id) }}" class="d-inline" method="POST"
                    onsubmit="return confirm('Bạn có đồng ý xóa hay không?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

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