@extends('layouts.admin')
@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome ADMIN</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('storage/images/banner1.jpg') }}" alt="people" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <p class="card-title">Đơn hàng hôm nay</p>
                            <p class="fs-30 mb-2">4006</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <p class="card-title">Doanh thu</p>
                            <p class="fs-30 mb-2">47033</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Top sản phẩm</h5>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kem chống nắng</td>
                                    <td class="font-weight-bold">$362</td>
                                    <td>21-22024</td>
                                    <td>
                                        <span class="badge bg-success">Bán chạy</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kem chống nắng</td>
                                    <td class="font-weight-bold">$362</td>
                                    <td>21-22024</td>
                                    <td>
                                        <span class="badge bg-danger">Ko bán</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

     
</div>

@endsection