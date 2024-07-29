
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
                      <h4>Hello! let's get started</h4>
                      <h6 class="font-weight-light">Sign in to continue.</h6>
                      <form class="pt-3">
                        <div class="form-group p-2">
                          <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                        </div>
                        <div class="form-group p-2">
                          <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mt-3">
                          <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.html">SIGN IN</a>
                        </div>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                          <div class="form-check">
                            <label class="form-check-label text-muted">
                              <input type="checkbox" class="form-check-input">
                              Keep me signed in
                            </label>
                          </div>
                          <a href="#" class="auth-link text-black text-danger">Forgot password?</a>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                          Don't have an account? <a href="{{ route('dangki') }}" class="text-primary">Create</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


    </div>
</section>
@endsection