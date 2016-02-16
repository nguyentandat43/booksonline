@extends('backend.master')
@section('trangchu', 'active')
@section('content')
<section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{!! $count_hodon !!}</h3>
                  <p>Đơn hàng</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{!! $count_sanpham !!}<sup style="font-size: 20px"></sup></h3>
                  <p>Sản phẩm</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{!! $count_danhgia !!}</h3>
                  <p>Đánh giá</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->


		<!-- ////////////////////////////////-->


          <div class="row">
          	 <div class="col-md-8 col-sm-6 col-xs-12">
          	 	<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Đơn hàng mới</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Tên khác hàng</th>
                          <th>Status</th>
                          <th>Ngày đặt hàng</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($donhang as $listdonhang)
                        <tr>
                          <td><a href="pages/examples/invoice.html">{!! $listdonhang->id !!}</a></td>
                          <td>{!! $listdonhang->name !!}</td>
                          <td>
                              @if($listdonhang->status == 0)
                              <span class="label label-danger">Chưa hoàn hành</span>
                              @else
                              <span class="label label-success">Hoàn hành</span>
                              @endif
                          </td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">{!! $listdonhang->created_at !!}</div></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="{!! url('admin/cart/list') !!}" class="btn btn-sm btn-info btn-flat pull-right"><i class="fa fa-plus"></i>  Xem tất cả đơn hàng</a>
                </div><!-- /.box-footer -->
              </div>
          	 </div>


          	 <div class="col-md-4 col-sm-6 col-xs-12">
          	 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Sản phẩm mới</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                   
                    
                    @foreach ($product as $value)
                   
                    <li class="item">
                      <div class="product-img">
                        <img src="{!! asset('public/upload/'.$value["image"]) !!}" alt="{!! $value['name'] !!}" />
                      </div>
                      <div class="product-info">
                        <a href="{!! url('/',$value['alias']) !!}" class="product-title" target="new">{!! $value["name"] !!} <span class="label label-success pull-right"><?php echo number_format($value["price"],0,',','.') ?>đ</span></a>
                        <span class="product-description">
                          Xem chi tiết
                        </span>
                      </div>
                    </li><!-- /.item -->
                    @endforeach
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{!! url('admin/product/list') !!}" class="btn btn-sm btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Xem tất cả sản phẩm</a>
                </div><!-- /.box-footer -->
              </div>
              </div>
          </div>
         <!-- -->

         <div class="box box-primary">
                <div class="box-header ui-sortable-handle">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Bình luận mới</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="todo-list ui-sortable">
                    <li>
                      <!-- drag handle -->
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <!-- checkbox -->
                      <!-- todo text -->
                      <span class="text">Design a nice theme</span>
                      <!-- Emphasis label -->
                      <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button class="btn btn-sm btn-info btn-flat pull-right"><i class="fa fa-plus"></i> Xem tất cả bình luận</button>
                </div>
          </div>
          </section>
@stop