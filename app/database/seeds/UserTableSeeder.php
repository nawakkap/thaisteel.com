<?php

class UserTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		
		User::create(array(
			'email' => 'admin@thaisteel.com',
			'password' => Hash::make('passw0rd'),
			'permission' => 1,
			'name' => 'Administrator'
		));
	}
}