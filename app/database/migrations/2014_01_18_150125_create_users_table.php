<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('email', 255);
			$table->string('password', 255);
			$table->string('name', 1000);
			$table->string('lastname', 1000);
			$table->text('address');
			$table->string('company', 1000);
			$table->string('mobile_phone', 1000);
			$table->string('telephone', 1000);
			$table->string('fax', 1000);
			$table->string('remember_token', 1000);
			$table->integer('permission');
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
		Schema::drop('users');
	}

}