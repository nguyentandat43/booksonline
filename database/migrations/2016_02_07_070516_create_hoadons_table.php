<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hoadons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->string('email',100);
			$table->string('phone',60);
			$table->string('addreass',60);
			$table->integer('status');
			$table->integer('total_qty');
			$table->integer('total_price');
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
		Schema::drop('hoadons');
	}

}
