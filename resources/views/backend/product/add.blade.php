@extends('backend.master')
@section('controller','Sản phẩm')
@section('action','Thêm')
@section('sanpham','active')
@section('them_sp', 'active')
@section('content')
<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
             @include ('backend.blocks.error')
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <form role="form" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                  <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="col-md-2">Danh mục</label>
                        <div class="col-md-10"> 
                            <select class="form-control" name="parentid">
                              <option>Mời bạn chọn</option>
                              <?php cate_parent($cate); ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtten" class="col-md-2">Tên sản phẩm</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtten"  placeholder="Tên sản phẩm..." value="{!! old('txtten') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtgia" class="col-md-2">Giá</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtgia" placeholder="Giá sản phẩm..." value="{!! old('txtgia') !!}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="txtgiasale" class="col-md-2">Giá khuyến mại</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtgiasale" placeholder="Giá khuyến mại..." value="{!! old('txtgiasale') !!}">
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="txtndhienthi" class="col-md-2">Nội dung chi tiết</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control focus-form" name="txtndhienthi" id="txtndhienthi"> {!! old('txtndchitiet') !!} </textarea>
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
                            <textarea class="form-control" name="txtndchitiet" id="txtndchitiet"> {!! old('txtndchitiet') !!} </textarea>
                            <script type="text/javascript">
                              ckeditor('txtndchitiet');
                            </script>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fileimages" class="col-md-2">Hình ảnh</label>
                        <div class="col-md-10"> 
                            <input type="file" name="fileimages">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fileimages" class="col-md-2">Hình ảnh chi tiết</label>
                        <div class="col-md-3"> 
                            <input type="file" name="fileimageschitiet[]" multiple="multiple">
                        </div>
                        <div class="col-md-5"> 
                            Shift để chọn nhiều hình
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtmota" class="col-md-2">Mô tả</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control" name="txtmota" id="txtmota" rows="4" >{!! old('txtmota') !!}</textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="txtKeyword" class="col-md-2" >Keyword</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtkeyword" id="txtkeyword" placeholder="Keyword..." value="{!! old('txtkeyword') !!}">
                        </div>
                      </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->

       
            <!-- right column -->
          </div>   <!-- /.row -->
          

        </section>
    
@stop