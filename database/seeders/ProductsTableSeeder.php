<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
     
     public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'quantity' => 10,
            'price' => 20.99,
        ]);

        // Add more products as needed
    }
}
