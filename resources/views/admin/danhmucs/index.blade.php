@extends('layouts.admin')
@section('title')
{{ $title }}
@endsection
@section('css')
@endsection
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản lý danh mục sản phẩm</h4>
            </div>
        </div>
           <!-- Striped Rows -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">{{ $title }}</h5>
                        <a href="{{ route('admin.danhmucs.create')}}" class="btn btn-success">Thêm danh Mục</a>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Hình Ảnh</th>
                                        <th scope="col">Tên Danh Mục</th>
                                        <th scope="col">Trạng Thái</th>
                                        <th scope="col">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listDanhMuc as $index => $item)
                                    <tr>
                                        <th scope="row">{{ $index +1}}</th>
                                        <td><img src="{{ Storage::url($item->hinh_anh)}}" alt="" width="150px"></td>
                                        <td>{{ $item->ten_danh_muc}}</td>
                                        <td class="{{ $item->trang_thai == true ? 'text-success' : text-danger}}">
                                            {{ $item->trang_thai == true ? 'Hiển thị' : 'Ẩn'}}</td>
                                        <td>
                                        <td>                                                       
                                            <a href="{{ route('admin.danhmucs.edit', $item->id) }}"><i class="fa-solid fa-check text-dark"></i></a>
                                            
                                            <form action="{{ route('admin.danhmucs.destroy', $item->id) }}" method= "POST" class="d-inline" onsubmit="return confirm('bạn có đồng ý xóa không')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-white">
                                                    <i class="fa-solid fa-trash text-dark"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div> <!-- content -->
@endsection
@section('js')
@endsection