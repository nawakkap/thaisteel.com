<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('products', function($table) {
			$table->increments('id');
			$table->string('name', 1000);
			$table->string('type', 255);
			$table->float('thickness')->nullable();
			$table->float('weight_per_m');
			$table->float('weight_tolerance');
			$table->string('grade', 255)->nullable();
			$table->integer('standard_length');
			$table->integer('pack_unit')->nullable();
			$table->index('type');
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
		Schema::drop('products');
	}

}