<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample product data
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'stock_quantity' => 100,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'stock_quantity' => 50,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for Product 3',
                'price' => 39.99,
                'stock_quantity' => 75,
            ],
        ];

        // Insert the data into the products table
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
