@extends('backend.master')
@section('controller','Danh mục')
@section('action','Danh sách')
@section('danhmuc', 'active')
@section('list_dm', 'active')
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
                        <th style="width:6%" align="center">Thứ tự</th>
                        <th>Loại danh mục</th>
                        <th>Keyword</th>
                        <th>Mô tả</th>
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($listCate as $cates)
                      <tr>
                        <td>{!! $cates->name !!}</td>
                        <td align="center">{!! $cates->order !!}</td>
                        <td>
                          @if($cates->prarent_id == 0)
                          {!! "--" !!}
                          @else
                          <?php
                              $pdata = DB::table('categories')->where('id',$cates->prarent_id)->first();
                             echo @$pdata->name;
                          ?>
                          @endif
                        </td>
                        <td>{!! $cates->keyworks !!}</td>
                        <td>{!! $cates->discription !!}</td>
                        <td align="center">
                          <a href="{!! url('admin/category/edit',$cates->id) !!}"><i class="fa fa-edit"></i></a>
                          <a href="{!! url('admin/category/delete',$cates->id) !!}"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                    @endforeach
                
                    </tbody>
                  </table>
                  <div class="pull-right">
                    <?php $listCate->setPath('list'); ?>
                    <?php echo $listCate->render(); ?>                 
                  </div>
                    
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->



         
         
                    
                  
      




        </section>
    
@stop