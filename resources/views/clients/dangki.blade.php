@extends('layouts.client')

{{-- section dùng để định nghĩa nộn dung của section --}}
@section('content')
<section>
    <div class="container-fluid" style="margin-top: 120px ">
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="https://picsum.photos/id/237/200/300" alt="logo" class="w-25 rounded-pill">
                                </div>
                                <h4>New here?</h4>
                                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                                <form class="pt-3">
                                    <div class="form-group p-2">
                                        <input type="text" class="form-control form-control-lg"
                                            id="exampleInputUsername1" placeholder="Username">
                                    </div>
                                    <div class="form-group p-2">
                                        <input type="email" class="form-control form-control-lg"
                                            id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group p-2">
                                        <input type="password" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="mb-4 p-2">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" class="form-check-input">
                                                I agree to all Terms & Conditions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                            href="{{ route('dangnhap') }}">SIGN UP</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection