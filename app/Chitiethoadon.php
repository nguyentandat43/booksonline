<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitiethoadon extends Model {

	//
	protected $table ='chitiethoadons';
	protected $fillabel = ['id_hoadon','id_sanpham','soluong','giasp','tong_giasp'];
	public $timestamp = false;
	public function hoadon(){
		return $this->belongsTo('App\Hoadon');
	}
	public function product(){
		return $this->belongsTo('App\Product');
	}
}
