<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductUserMappingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('product_user_mappings', function($table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->integer('user_id');
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
		Schema::drop('product_user_mappings');
	}

}