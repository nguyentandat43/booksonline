@extends('frontend.master')
@section('title', 'Công ty TNHH phân phối sách')
@section('trangchu', 'active')
@section('content')
<!-- slide --- banner -->
@include('frontend.blocks.banner')
<!-- end slide --- banner -->
<!-- san pham mới -->
@include('frontend.blocks.product_new')
<!-- end sản phẩm mới -->
<!-- san pham khuyeens mai -->
@include('frontend.blocks.product_sale')
<!-- end sản phẩm khuyến mại-->
<!-- san pham noi bat -->
@include('frontend.blocks.banchay')
@stop