<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('transactions', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->integer('user_id');
			$table->integer('product_name_id');
			$table->float('price');
			$table->float('quantity');
			$table->integer('come_from');
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
		Schema::drop('transactions');
	}

}
