<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->insert([
			['category' => 'Computers', 'useful_life' => '3'],
			['category' => 'Furniture & Fixtures', 'useful_life' => '7'],
			['category' => 'Office Equipment', 'useful_life' => '5']
		]);
	}
}
