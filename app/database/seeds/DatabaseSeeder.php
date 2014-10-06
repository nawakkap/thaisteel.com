<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		
		$this->command->info('User table seeded!!');
		
		$this->call('ProductTableSeeder');
		
		$this->command->info('Product table seeded!!');
		
		$this->call('ProductNameTableSeeder');
		
		$this->command->info('Product Name table seeded!!');
		
	}

}