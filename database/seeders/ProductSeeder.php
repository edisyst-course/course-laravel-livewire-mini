<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['name' => 'iPhone', 'price' => 999.99]);
        Product::create(['name' => 'iPad', 'price' => 699.99]);
        Product::create(['name' => 'iMac', 'price' => 1999.99]);
        Product::create(['name' => 'Asus ROG', 'price' => 1799.99]);
        Product::create(['name' => 'Galaxy S21', 'price' => 1099.99]);
    }
}
