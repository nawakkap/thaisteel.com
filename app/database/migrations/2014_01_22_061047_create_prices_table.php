<?php

use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('prices', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->integer('user_id');
			$table->float('price_kg');
			$table->float('price_unit');
			$table->float('delivery_date');
			$table->string('file_name');
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
		Schema::drop('prices');
	}

}