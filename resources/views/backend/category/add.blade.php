@extends('backend.master')
@section('controller','Danh mục')
@section('action','Thêm')
@section('danhmuc', 'active')
@section('them_dm', 'active')
@section('content')
<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
             @include ('backend.blocks.error')
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" class="form-horizontal" method="post" action="{!! route('admin.category.getAdd')!!}">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                  <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="col-md-2">Danh mục</label>
                        <div class="col-md-8"> 
                            <select class="form-control" name="parentId">
                              <option value="0">Mời bạn chọn</option>
                              <?php cate_parent($data); ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="col-md-2">Tiêu đề</label>
                        <div class="col-md-8"> 
                            <input type="text" class="form-control" name="txtTieude"  placeholder="Tiêu đề..." value="{!! old('txtTieude') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="col-md-2">Thứ tự</label>
                        <div class="col-md-8"> 
                            <input type="text" class="form-control" name="txtThutu" placeholder="Thứ tự..." value="{!! old('txtThutu') !!}">
                        </div>
                      </div>

                      <!-- 
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="col-md-2">Hình ảnh</label>
                        <div class="col-md-8"> 
                            <input type="file" name="flimage">
                        </div>
                      </div>
                      !-->
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="col-md-2">Mô tả</label>
                        <div class="col-md-8"> 
                            <textarea class="form-control" name="txtMota" id="txtMota" rows="4" >{!! old('txtMota') !!}</textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="txtKeyword" class="col-md-2" >Keyword</label>
                        <div class="col-md-8"> 
                            <input type="text" class="form-control" name="txtKeyword" id="txtKeyword" placeholder="Keyword..." value="{!! old('txtKeyword') !!}">
                        </div>
                      </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
          

        </section>
    
@stop