@extends('backend.master')
@section('controller','Tin tức')
@section('action','Thêm')
@section('tintuc','active')
@section('them_tt', 'active')
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
                        <label for="txtten" class="col-md-2">Tiêu đề</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtten"  placeholder="Tên sản phẩm..." value="{!! old ('txtten',isset($tintuc)?$tintuc["name"]:NULL) !!}">
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="txtndhienthi" class="col-md-2">Intro</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control focus-form" name="txtndhienthi" id="txtndhienthi"> {!! old('txtndhienthi',isset($tintuc)?$tintuc["intro"]:NULL) !!} </textarea>
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
                        <label for="txtndchitiet" class="col-md-2">Content</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control" name="txtndchitiet" id="txtndchitiet"> {!! old('txtndchitiet',isset($tintuc)?$tintuc["content"]:NULL) !!} </textarea>
                            <script type="text/javascript">
                              ckeditor('txtndchitiet');
                            </script>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fileimages" class="col-md-2">Hình ảnh</label>
                        <div class="col-md-10"> 
                            <input type="file" name="fileimages">
                            <input type="hidden" name="img_current" value="{!! isset($tintuc)?$tintuc["image"]:NULL !!}">
                            <img src="{!! asset('public/upload/tintuc/'.$tintuc["image"]) !!}" width="70">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtmota" class="col-md-2">Mô tả</label>
                        <div class="col-md-10"> 
                            <textarea class="form-control" name="txtmota" id="txtmota" rows="4" >{!! old('txtmota',isset($tintuc)?$tintuc["description"]:NULL) !!}</textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="txtKeyword" class="col-md-2" >Keyword</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtkeyword" id="txtkeyword" placeholder="Keyword..." value="{!! old('txtkeyword',isset($tintuc)?$tintuc["keyword"]:NULL) !!}">
                        </div>
                      </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Sữa bài viết</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->

       
            <!-- right column -->
          </div>   <!-- /.row -->
          

        </section>
    
@stop