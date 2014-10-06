<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductNameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('product_names', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->string('name', 1000);
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
		//
		Schema::drop('product_names');
	}

}