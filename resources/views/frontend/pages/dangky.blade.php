@extends('frontend.master')
@section('title','Đăng ký')
@section('content')
<div id="content">
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="{!! url('/') !!}">Trang chủ</a></li>
            <li class="active">Đăng ký</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form-style form-login">
            <form accept-charset="UTF-8" action="" id="customer_register" method="post">
              <h3 class="form-heading">Đăng ký tài khoản</h3>
              <p class="form-description">Nếu bạn có một tài khoản, xin vui lòng chuyển qua trang đăng nhập.</p>
              <div class="row">
                <div class="col-md-1">
                  <p class="text-right">Username <span>*</span></p>
                </div>
                <div class="col-md-11">
                  <input type="text" value="{!! old('username') !!}" name="username">
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-1">
                  <p class="text-right">Mật khẩu <span>*</span></p>
                </div>
                <div class="col-md-11">
                  <input type="password" value="{!! old('password') !!}" name="password">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <p class="text-right">Email <span>*</span></p>
                </div>
                <div class="col-md-11">
                  <input type="email" value="{!! old('email') !!}" name="email">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <p class="text-right">Tên <span>*</span></p>
                </div>
                <div class="col-md-11">
                  <input type="text" value="{!! old('name') !!}" name="name">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <p class="text-right">Điện thoại<span>*</span></p>
                </div>
                <div class="col-md-11">
                  <input type="text" value="{!! old('phone') !!}" name="phone">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <p class="text-right">Địa chỉ <span>*</span></p>
                </div>
                <div class="col-md-11">
                  <input type="password" value="{!! old('diachi') !!}" name="diachi">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1"> </div>
                <div class="col-md-11">
                  <p><a href="{!! url('dang-ky') !!}">Đăng nhập</a></p>
                  <button class="comment-submit">Đăng ký</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@stop