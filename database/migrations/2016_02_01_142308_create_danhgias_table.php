<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('danhgias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->text('content');
			$table->integer('numberstar');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
		Schema::drop('danhgias');
	}

}
