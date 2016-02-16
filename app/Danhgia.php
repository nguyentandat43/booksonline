<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhgia extends Model {

	protected $table ='danhgias';
	protected $fillabel = ['name','email','content','numberstar','product_id'];
	public $timestamps = true;
	public function product(){
		return $this->belongsTo('App\Product');
	}

}
