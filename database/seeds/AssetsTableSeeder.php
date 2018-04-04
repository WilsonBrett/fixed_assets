<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('assets')->insert([
				['name' => 'Laptops - Finance', 'category_id' => 1, 'amount' => 8000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Laptops - Marketing', 'category_id' => 1, 'amount' => 7000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Laptops - Sales', 'category_id' => 1, 'amount' => 10000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Laptops - Engineering', 'category_id' => 1, 'amount' => 9000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Desks - Finance', 'category_id' => 2, 'amount' => 5000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Desks - Marketing', 'category_id' => 2, 'amount' => 4000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Desks - Sales', 'category_id' => 2, 'amount' => 6000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Desks - Engineering', 'category_id' => 2, 'amount' => 2000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Phones - Finance', 'category_id' => 3, 'amount' => 1000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Phones - Marketing', 'category_id' => 3, 'amount' => 2000, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Phones - Sales', 'category_id' => 3, 'amount' => 1500, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01'],
				['name' => 'Phones - Engineering', 'category_id' => 3, 'amount' => 900, 'purchase_date' => '1900-01-01', 'service_start_date' => '1900-01-01', 'expiration_date' => '1900-01-01']
			]);
    }
}
