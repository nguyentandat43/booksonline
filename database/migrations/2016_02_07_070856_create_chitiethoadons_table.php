<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chitiethoadons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_hoadon')->unsigned();
			$table->foreign('id_hoadon')->references('id')->on('hoadons')->onDelete('cascade');
			$table->integer('id_sanpham')->unsigned();
			$table->foreign('id_sanpham')->references('id')->on('products')->onDelete('cascade');
			$table->integer('soluong');
			$table->integer('giasp');
			$table->integer('tong_giasp');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chitiethoadons');
	}

}
