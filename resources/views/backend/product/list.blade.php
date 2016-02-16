@extends('backend.master')
@section('controller','Sản phẩm')
@section('action','Danh sách')
@section('sanpham','active')
@section('list_sp', 'active')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Tên danh mục</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Users</th>
                        <th>Date Create - Date Update</th>
                        <th>Category</th>
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($arrProduct as $product)
                      <tr>
                        <td>{!! $product->name !!}</td>
                        <td>
                          <?php
                            if($product->pricesale > 0){
                              echo "<p>".number_format($product->pricesale,0,',','.')."đ</p>";
                              echo "<s style='font-size:12px; color:red'>".number_format($product->price,0,',','.')."đ</s>";
                            }else{
                              echo number_format($product->price,0,',','.')."đ";
                            }
                          ?>
                        </td>
                        <td>
                          <img src="{!! asset('public/upload/'.$product->image) !!}" width="40" alt="{!! $product->name !!}">
                        </td>
                        <td>
                        <?php
                              $puser = DB::table('users')->where('id',$product->user_id)->first();
                              echo $puser->username;
                          ?>
                        </td>
                        <td>{!! $product->created_at !!} - {!! $product->updated_at !!}</td>
                        <td>
                          <?php
                              $pdata = DB::table('categories')->where('id',$product->cate_id)->first();
                              echo $pdata->name;
                          ?>
                        </td>
                        <td align="center">
                          <a href="{!! url('admin/product/edit',$product->id) !!}"><i class="fa fa-edit"></i></a>
                          <a href="{!! url('admin/product/delete',$product->id) !!}"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                    @endforeach
                
                    </tbody>
                  </table>
                  <div class="pull-right">
                    <?php $arrProduct->setPath('list'); ?>
                    <?php echo $arrProduct->render(); ?>                 
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
    
@stop