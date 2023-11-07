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
                'name' => 'Product A',
                'description' => 'Description for Product 1',
                'price' => 9000.99,
                'stock_quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Product B',
                'description' => 'Description for Product 2',
                'price' => 2009.99,
                'stock_quantity' => 50,
                'category_id' => 2
            ],
            [
                'name' => 'Product C',
                'description' => 'Description for Product 3',
                'price' => 39.99,
                'stock_quantity' => 75,
                'category_id' => 3
            ],
            [
                'name' => 'Product D',
                'description' => 'Description for Product 1',
                'price' => 200,
                'stock_quantity' => 20,
                'category_id' => 2
            ],
            [
                'name' => 'Product E',
                'description' => 'Description for Product 2',
                'price' => 300,
                'stock_quantity' => 50,
                'category_id' => 2
            ],
            [
                'name' => 'Product F',
                'description' => 'Description for Product 3',
                'price' => 6045,
                'stock_quantity' => 80,
                'category_id' => 3
            ],
        ];

        // Insert the data into the products table
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
