@extends('frontend.master')
@section('title','Giỏ hàng')
@section('content')
<div id="content">
<section class="">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{!! url('/') !!}">Trang chủ</a></li>
				<li class="active">Giỏ hàng</li>
			</ul>
		</div>
	</div>
</div>
</section>
<section>
<div class="container">
	<div class="row">
		
		<div class="cart-table">
		<form method="post" action="/cart">
			<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Hình ảnh</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
				<?php $content = Cart::content(); 
					$total = 0;
					$total_sale = 0;
				?>
					@foreach($content as $row)
					<tr id="cart_{!! $row->rowid !!}">
						<td><img src="{!! asset('public/upload/'.$row->options->image)!!}" width="40"></td>
						<td>
							<a href="{!! url('/',[$row->options->alias]) !!}">{!! $row["name"] !!}</a>
						</td>
						<td>
							@if($row->options->pricesale > 0)
							<?php echo number_format($row->options->pricesale,0,',','.') ?>đ
							@else
							<?php echo number_format($row["price"],0,',','.') ?>đ
							@endif
						</td>
						<td><input type="text" class="item_cart_{!! $row->rowid !!}" value="<?php echo $row->qty ?>" name="qty"><a href="javascript:void(0)" class="update_cart" data-id="{!! $row->rowid !!}" data-qty="{!! $row->qty !!}"><span class="btn btn-primary" style="margin:0;padding:1px; border-radius:0">Update</span></a></td>
						<td>
							@if($row->options->pricesale > 0)
							<?php 
								echo number_format($row->options->pricesale * $row["qty"],0,',','.');
								$total_sale+=($row->options->pricesale * $row["qty"]);
							?>đ
							@else
							<?php 
								echo number_format($row["qty"] * $row["price"],0,',','.');
								$total+=($row["qty"] * $row["price"]);
							 ?>đ
							@endif
						</td>
						<td><a class="fa fa-trash-o item-remove" href="javascript:void(0)" data-id="{!! $row->rowid !!}"></a></td>
					</tr>
					@endforeach
					<tr>
						<td colspan="6">
							<div class="pull-right">
								Tổng tiền :<span class="tong_cart"><?php  echo number_format($total_sale+$total,0,',','.') ?></span>đ
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="6">
							<div class="pull-left">
								<a class="comment-submit" href="{!! url('/') !!}">Tiếp tục mua sắm</a>
							</div>
							<div class="pull-right">
								<a class="comment-submit" href="{!! url('huy-gio-hang') !!}">Hủy giỏ hàng</a>
								<a class="comment-submit" href="{!! url('thanh-toan') !!}">Thanh toán</a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
		</form>
		</div>
		
	</div>
</div>
</section>
</div>
@stop