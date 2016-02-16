@extends('backend.master')
@section('controller','Sản phẩm')
@section('action','Sữa')
@section('sanpham','active')
@section('content')
<section class="content">
        <form role="form" class="form-horizontal" method="post" action="" enctype="multipart/form-data" name="from-editproduct">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
             @include ('backend.blocks.error')
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                  <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="col-md-2">Danh mục</label>
                        <div class="col-md-10"> 
                            <select class="form-control" name="parentid">
                              <option>Mời bạn chọn</option>
                              <?php cate_parent($category,0,"--",$product["cate_id"]); ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtten" class="col-md-2">Tên sản phẩm</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtten"  placeholder="Tên sản phẩm..." value="{!! old ('txtten',isset($product)?$product["name"]:"") !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtgia" class="col-md-2">Giá</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtgia" placeholder="Giá sản phẩm..." value="{!! old('txtgia',isset($product)?$product["price"]:"") !!}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="txtgiasale" class="col-md-2">Giá khuyến mại</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtgiasale" placeholder="Giá khuyến mại..." value="{!! old('txtgiasale',isset($product)?$product["pricesale"]:"") !!}">
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="txtndhienthi" class="col-md-2">Nội dung chi tiết</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control focus-form" name="txtndhienthi" id="txtndhienthi"> {!! old('txtndchitiet',isset($product)?$product["intro"]:"") !!} </textarea>
                            <script type="text/javascript">
                              CKEDITOR.replace('txtndhienthi',{
                                height: '150px',
                                toolbar:[
                                ['Source','-','NewPage','Preview','-','Templates'],
                                ['Styles','Format','Font','FontSize'],
                                ['TextColor','BGColor'],
                                ]
                              });
                            </script>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="txtndchitiet" class="col-md-2">Nội dung chi tiết</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control" name="txtndchitiet" id="txtndchitiet"> {!! old('txtndchitiet',isset($product)?$product["content"]:"") !!} </textarea>
                            <script type="text/javascript">
                              ckeditor('txtndchitiet');
                            </script>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fileimages" class="col-md-2">Hình ảnh</label>
                        <div class="col-md-10"> 
                            <input type="file" name="fileimages"><br />
                            <img src="{!! asset('public/upload/'.$product["image"]) !!}" width="120">
                            <input type="hidden" value="{!! $product['image']!!}" name="img_current" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fileimageschitiet" class="col-md-2">Hình ảnh chi tiết</label>
                        <div class="col-md-10"> 
                            <input type="file" name="fileimageschitiet[]" multiple="multiple">
                            @foreach($product_img as $key => $list_images)
                            <div class="col-sm-2" id="{!! $key !!}" style="margin-top:15px;">
                            <a href="javascript:void(0)" id="delete_image" title="Xóa hình này"><span class="deleteimages" style="margin-left:-15px;"><i class="glyphicon glyphicon-remove"></i></span></a>
                            <img src="{!! asset('public/upload/images_detail/'.$list_images["image"]) !!}" data-id="{!! $list_images['id'] !!}" id="{!! $key !!}" width="120" style="margin-left:-15px;">
                            </div>
                            @endforeach
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="txtmota" class="col-md-2">Mô tả</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control" name="txtmota" id="txtmota" rows="4" >{!! old('txtmota',isset($product)?$product["discription"]:"") !!}</textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="txtKeyword" class="col-md-2" >Keyword</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtkeyword" id="txtkeyword" placeholder="Keyword..." value="{!! old('txtkeyword',isset($product)?$product["keywork"]:"") !!}">
                        </div>
                      </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Sữa sản phẩm</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
          </form>

        </section>
    
@stop