@extends('frontend.master')
@section('title','Liên hệ')
@section('lienhe','active')
@section('content')
<div id="content">
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="{!! url('/') !!}">Trang chủ</a></li>
            <li class="active">Liên hệ</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form-contact">
            <form action="" id="contact" method="post">
              <div class="help-block with-errors"><?php echo $errors->first('name'); ?></div>
              <input type="text" placeholder="Họ và tên" value="{!! old('name') !!}" name="name" title="First Name" class="input-text ">
              <div class="help-block with-errors"><?php echo $errors->first('email'); ?></div>
              <input type="text" placeholder="Email" value="{!! old('email') !!}" class="input-text" name="email">
              <div class="help-block with-errors"><?php echo $errors->first('content'); ?></div>
              <textarea placeholder="Nội dung" name="content" title="Comment" class="required-entry input-text" cols="5" rows="3">{!! old('content') !!}</textarea>
              <button type="submit" class="comment-submit">Gửi</button>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-contact">
            bản đồ
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@stop