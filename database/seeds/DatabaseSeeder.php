<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('CategoryTableSeeder');
        $this->command->info('Category table seeded!');

        $this->call('ProductTableSeeder');
        $this->command->info('Product table seeded!');
	}

}
