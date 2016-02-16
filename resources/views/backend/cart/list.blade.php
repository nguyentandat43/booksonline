@extends('backend.master')
@section('controller','Đơn hàng')
@section('action','Danh sách')
@section('hoadon','active')
@section('list_hd','active')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Ngày đặt</th>
                        <th>SL</th>
                        <th>Status</th>
                        <th>Tông cộng</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($hoadon as $list)
                      <tr>
                        <td class="list_show" data-id="{!! $list["id"] !!}">{!! $list["name"] !!} <img src="{!! asset('public/upload/logoicon/dir-plus.png') !!}"></td>
                        <td>{!! $list["email"] !!}</td>
                        <td>{!! $list["phone"] !!}</td>
                        <td>{!! $list["addreass"] !!}</td>
                        <td>{!! $list["created_at"] !!}</td>
                        <td>{!! $list["total_qty"] !!}</td>
                        <td align="center">
                            @if($list["status"] == 0)
                              <a href="javascript:void(0)" title="Hoàn thành dơn hàng ngay" data-id="{!! $list["id"] !!}" class="update_orders hide_id_{!! $list['id'] !!}"><img src="{!! asset('public/upload/logoicon/select.png') !!}"></a>
                              <span class="show_id_{!! $list['id'] !!}"></span>
                            @else
                              Đã hoàn thành
                            @endif
                        </td>
                        <td><?php echo number_format($list["total_price"],0,',','.') ?>đ</td>
                        <td><a href="{!! url('admin/cart/delete',$list["id"]) !!}">Xóa</a></td>
                      </tr>
                      <?php 
                        $cthoadon = DB::table('chitiethoadons')
                                    ->join('products','chitiethoadons.id_sanpham','=','products.id')
                                    ->where('chitiethoadons.id_hoadon',$list["id"])
                                    ->groupBy('products.id','chitiethoadons.id_sanpham')->get();
                      ?>
                      <tr class="hide_listcthd show_listcthd_{!! $list['id'] !!}">
                        <th colspan="2">Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th colspan="2">Số lượng</th>
                        <th colspan="2">Giá sản phẩm</th>
                        <th colspan="2">Tổng giá sản phẩm</th>
                      </tr>
                      @foreach($cthoadon as $listcthd)
                       <tr class="hide_listcthd show_listcthd_{!! $list['id'] !!}">
                        <td colspan="2"><a href="{!! url('/',$listcthd->alias) !!}" target="new">{!! $listcthd->name !!}</a></td>
                        <td><img src="{!! asset('public/upload/'.$listcthd->image) !!}" width="30"></td>
                        <td colspan="2">{!! $listcthd->soluong !!}</td>
                        <td colspan="2"><?php echo number_format($listcthd->giasp,0,',','.') ?>đ</td>
                        <td colspan="2"><?php echo number_format($listcthd->tong_giasp,0,',','.') ?>đ</td>
                      </tr>
                      @endforeach
                    @endforeach
                    </tbody>
                  </table>
                  <div class="pull-right">
                    <?php $hoadon->setPath('list'); ?>
                    <?php echo $hoadon->render(); ?>                 
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
    
@stop