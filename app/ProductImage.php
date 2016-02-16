<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model {

	protected $table ='product_images';
	protected $fillabel = ['image','product_id'];
	public $timestamp = false;

	public function product(){
		return $this->belongsTo('App\Product');
	}

}
