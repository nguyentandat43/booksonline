<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table ='categories';
	protected $fillabel = ['name','alias','order','prarent_id','keyworks','discription'];
	public $timestamps = true;
	public function product(){
		return $this->hasMany('App\Product');
	}
}
