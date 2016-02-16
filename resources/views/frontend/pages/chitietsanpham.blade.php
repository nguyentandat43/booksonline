@extends('frontend.master')
@section('title',$data->name)
@section('content')
   <!-- end header -->
<section class="content-slide">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="{!! url('/') !!}">Trang chủ</a></li>
            <?php $cate_name = DB::table('categories')->where('id',$data->cate_id)->first(); ?>
            <li><a href="{!! url('danh-muc',$cate_name->alias) !!}">{!! $cate_name->name !!}</a></li>
            <li class="active">{!! $data->name !!}</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-9 content-product">
          <div class="row">
            <div class="col-md-4">
              <div class="content-product-image">
                <div class="text-center elevate-image"> @if($data->pricesale > 0)<span class="product-item-sale"></span> @endif <img id="zoom" class="img-responsive" src="{!! asset('public/upload/'.$data->image) !!}" data-zoom="{!! asset('public/upload/'.$data->image) !!}"> </div>
                <div id="gallery_01">
                  <div id="owl-product">
                    <div class="item"> <a href="javascript:void(0)" data-zoom-image="{!! asset('public/upload/'.$data->image) !!}" data-image="{!! asset('public/upload/'.$data->image) !!}"><img id="zoom" src="{!! asset('public/upload/'.$data->image) !!}"></a> </div>
                    <?php $images = DB::table('product_images')->where('product_id',$data->id)->get(); ?>
                    @foreach($images as $image)
                    <div class="item"> 
                      <a href="javascript:void(0)" data-zoom-image="{!! asset('public/upload/images_detail/'.$image->image) !!}" data-image="{!! asset('public/upload/images_detail/'.$image->image) !!}">
                      <img id="zoom" src="{!! asset('public/upload/images_detail/'.$image->image) !!}">
                      </a> 
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="product-name">{!! $data->name !!}</h1>
              <p class="product-availability">Tình trạng: <span> Còn hàng </span></p>
              <p class="product-price"> @if($data->pricesale > 0)<?php echo number_format($data->pricesale,0,',','.') ?>đ<span><?php echo number_format($data->price,0,',','.') ?>đ </span></p> 
              @else 
              <p class="product-price"><?php echo number_format($data->price,0,',','.') ?>đ</p>
              @endif
              <p class="product-description">
                {!! $data->intro!!}
               </p>
              <div class="form-add-cart">
                  <label for="">Số lượng</label>
                  <div class="fac-quantity">
                    <input type="text" value="1" class="quantity" name="quantity" disabled="disabled">
                  </div>
                  <a href="javascript:void(0)" class="product-item-cart add_to_cart" data-id="{!! $data->id !!}"><span></span>Thêm vào giỏ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 sidebar">
          <div class="sb-block">
            <div class="sb-block-title">
              <h2>Sản phẩm bán chạy</h2>
            </div>
            <div class="sb-block-content sb-products">
              <ul>
              @foreach ($product_banchays as $product_banchay)

                <li class="product-item-mini"> <a href="{!! url('/',$product_banchay->alias) !!}">
                 <img class="pim-image" src="{!! asset('public/upload/'.$product_banchay->image) !!}">
                  <h3 class="pim-name">{!! $product_banchay->name !!}</h3>
                  <p class="pim-description">Xem tiếp...</p>
                  <p class="pim-price"> 
                  <?php 
                  if($product_banchay->pricesale > 0){ 
                    echo number_format($product_banchay->pricesale,0,',','.')."đ";
                    echo "<span>".number_format($product_banchay->price,0,',','.')."đ</span>";
                  }else{
                    echo "".number_format($product_banchay->price,0,',','.')."đ";
                  } 
                  ?>
                    </p>
                  </a>
                </li>
               @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12 content-product-tabs"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả sản phẩm</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              {!! $data->content !!}        
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
            <!-- -->
              <ul>
                <?php $danhgia = DB::table('danhgias')->where('product_id',$data->id)->get(); ?>
                @foreach($danhgia as $list_danhgia)
                <li style="padding:5px"><strong>{!! $list_danhgia->name !!}</strong> đã cho <span style="color:red">{!! $list_danhgia->numberstar !!}</span> sao
                  <ul>
                    <li style="padding-top:8px">{!! $list_danhgia->content !!}</li>
                  </ul>
                </li>
                @endforeach
                <div style="font-size:20px">Tổng số sao: <span style="color:red">
                  <?php 
                    $avg = DB::table('danhgias')->where('product_id',$data->id)->avg('numberstar');
                    echo ceil($avg);
                  ?>
                </span> sao</div>
              </ul>
              <!-- -->
            <form action="" id="contact" method="post">
           
              <div class="col-md-6">
                Chọn số sao:
                @for($i = 1; $i <= 5; $i++)
                  @if($i == 5)
                  <input type="radio" name="danhgia" value="{!! $i !!}" title="{!! $i !!} sao" checked="checked"> {!! $i !!} sao
                  @else
                  <input type="radio" name="danhgia" value="{!! $i !!}" title="{!! $i !!} sao"> {!! $i !!} sao
                  @endif
                @endfor
                <div class="form-contact"  style="margin-top:5px;">
                    <input type="hidden" value="{!! $data->id !!}" name="idproduct" class="ip_product">
                    <input type="text" placeholder="Họ và tên" value="{!! old('name') !!}" name="name" title="First Name" class="input-text txtname">
                    <input type="text" placeholder="Email" value="{!! old('email') !!}" class="input-text txtemail" name="email">
                    <textarea placeholder="Nội dung" name="conttent" title="Comment" class="required-entry input-text txtcontent" cols="5" rows="3">{!! old('conttent') !!}</textarea>
                    <button type="button" class="comment-submit send_danh_gia">Gửi</button>
                </div>
              </div>
             </form><span class="guidulieu"></span>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="cc-products">
            <div class="row">
              <div class="col-md-12">
                <h2 class="cc-products-title">Sản phẩm Liên quan</h2>
              </div>
              <?php $prodcut_lq = DB::table('products')
              ->where('cate_id',$data->cate_id)
              ->orderBy('id','DESC')
              ->take(4)->get()?>
              @foreach($prodcut_lq as $prodcut_lqs)
              <div class="col-md-3">
                <div class="product-item-category">
                  <div class="product-item-image"> <a href="{!! url('/'.$prodcut_lqs->alias) !!}"> <img class="img-responsive" src="{!! asset('public/upload/'.$prodcut_lqs->image) !!}"> </a> </div>
                  <a class="product-item-name" href="{!! url('/'.$prodcut_lqs->alias) !!}">{!! $prodcut_lqs->name !!}</a>
                  <div>
                    @if($prodcut_lqs->pricesale > 0)
                        <p class="product-item-price"> <?php echo number_format($prodcut_lqs->price,0,',','.') ?>đ<span class="product-item-price-sale"> <?php echo number_format($prodcut_lqs->pricesale,0,',','.') ?>đ </span> </p>
                        @else
                        <p class="product-item-price"><?php echo number_format($prodcut_lqs->price,0,',','.') ?>đ </p>
                        @endif;
                    <a class="product-item-cart add_to_cart" data-id="{!! $prodcut_lqs->id !!}" href="javascript:void(0)" title="Thêm vào giỏ hàng"><span></span>Thêm vào giỏ</a> </div>
                    @if($prodcut_lqs->pricesale > 0)<span class="product-item-sale"></span> @endif</div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop