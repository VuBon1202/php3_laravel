@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>{{ $product->ten_san_pham }}</h1>
    <p><img src="{{ Storage::url($product->hinh_anh) }}" width="150px" alt="Hình ảnh sản phẩm"></p>
    <p>Giá: {{ $product->gia }}</p>
    <p>Số lượng: {{ $product->so_luong }}</p>
    <p>Ngày nhập: {{ $product->ngay_nhap }}</p>
    <p>Trạng thái:
        @if($product->trang_thai == 1)
            <span class="badge bg-success">Còn hàng</span>
        @else
            <span class="badge bg-danger">Hết hàng</span>
        @endif
    </p>
    <h3>Bình luận của sản phẩm</h3>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Nội dung bình luận</th>
                <th>Ngày đăng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product->comments as $comment)
            <tr>
                <td>{{ $comment->user_id }}</td>
                <td>{{ $comment->content }}</td>
                <td>{{ $comment->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection