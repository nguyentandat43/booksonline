@extends('backend.master')
@section('controller','Đánh giá')
@section('action','Danh sách')
@section('sanpham','active')
@section('list_danhgia', 'active')
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
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($danhgia as $danhgias)
                    <tr>
                        <td class="list_show" data-id="{!! $danhgias->id !!}">{!! $danhgias->name !!} <img src="{!! asset('public/upload/logoicon/dir-plus.png') !!}"></td>
                        <td>
                          <?php
                            if($danhgias->pricesale > 0){
                              echo "<p>".number_format($danhgias->pricesale,0,',','.')."đ</p>";
                              echo "<s style='font-size:12px; color:red'>".number_format($danhgias->price,0,',','.')."đ</s>";
                            }else{
                              echo number_format($danhgias->price,0,',','.')."đ";
                            }
                          ?>
                        </td>
                        <td>
                          <img src="{!! asset('public/upload/'.$danhgias->image) !!}" width="40" alt="{!! $danhgias->name !!}">
                        </td>
                      </tr>
                      <tr class="hide_listcthd show_listcthd_{!! $danhgias->id !!}">
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Nội dung</th>
                        <th>Ngày đánh giá</th>
                        <th>Số sao</th>
                      </tr>
                      <?php $danhsach = DB::table('danhgias')->where('product_id',$danhgias->id)->get(); ?>
                      @foreach($danhsach as $danhsachs)
                      <tr class="hide_listcthd show_listcthd_{!! $danhgias->id !!}">
                        <td>{!! $danhsachs->name !!}</td>
                        <td>{!! $danhsachs->email !!}</td>
                        <td>{!! $danhsachs->content !!}</td>
                        <td>{!! $danhsachs->created_at !!}</td>
                        <td>{!! $danhsachs->numberstar !!}</td>
                      </tr>
                      @endforeach
                    @endforeach
                    </tbody>
                  </table>
                  <div class="pull-right">
                    <?php $danhgia->setPath('listdanhgia'); ?>
                    <?php echo $danhgia->render(); ?>                 
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
@stop