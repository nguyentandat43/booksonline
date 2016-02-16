<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Hoadon;
use App\Product;
use App\Danhgia;
class TrangchuContronller extends Controller {

	public function index(){
		$count_hodon = Hoadon::count();
		$count_sanpham = Product::count();
		$count_danhgia = Danhgia::count();
		$product = Product::orderBy('id','DESC')->take(3)->get()->toArray();
		$donhang = Hoadon::orderBy('id','DESC')->take(4)->get();
		return view('backend.home',compact('count_hodon','count_sanpham','count_danhgia','product','donhang'));
	}

}
