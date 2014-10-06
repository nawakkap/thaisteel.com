<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('orders', function($table) {
			$table->increments('id');
			$table->string('checkout_id');
			$table->integer('product_id');
			$table->integer('user_id');
			$table->integer('product_name_id');
			$table->integer('supplier_id');
			$table->float('price');
			$table->float('quantity');
			$table->string('file_name');
			$table->string('file_imported_date');
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
		Schema::drop('orders');
	}

}