<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model {

	//
	protected $table ='hoadons';
	protected $fillabel = ['name','email','phone','addreass','status','total_qty','total_price'];
	public $timestamp = false;
	public function chitiethoadon(){
		return $this->hasMany('App\Chitiethoadon');
	}

}
