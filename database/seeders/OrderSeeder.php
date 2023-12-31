<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample order data
        $orders = [
            [
                'user_id' => 1,
                'product_id' => 1,
                'total_amount' => 990,
                'status' => 'Shipped',
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'total_amount' => 400,
                'status' => 'Processing',
            ],
            [
                'user_id' => 3,
                'product_id' => 3,
                'total_amount' => 129.99,
                'status' => 'Delivered',
            ],
            [
                'user_id' => 1,
                'product_id' => 1,
                'total_amount' => 190.50,
                'status' => 'Shipped',
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'total_amount' => 150.09,
                'status' => 'Processing',
            ],
            [
                'user_id' => 3,
                'product_id' => 3,
                'total_amount' => 50.80,
                'status' => 'Delivered',
            ],
        ];

        // Insert the data into the orders table
        foreach ($orders as $orderData) {
            Order::create($orderData);
        }
    }
}
