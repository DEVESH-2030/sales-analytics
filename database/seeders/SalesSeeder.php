<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sales; // Import the Sale model
use App\Models\Product; // Import the Product model
use Carbon\Carbon;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample sales data
        $sales = [
            [
                'product_id' => 1,
                'user_id' => 1,
                'quantity' => 5,
                'total_amount' => 99.95,
                'sale_date' => Carbon::now(),
            ],
            [
                'product_id' => 2,
                'user_id' => 2,
                'quantity' => 3,
                'total_amount' => 59.97,
                'sale_date' => Carbon::now(),
            ],
            [
                'product_id' => 3,
                'user_id' => 3,
                'quantity' => 2,
                'total_amount' => 39.98,
                'sale_date' => Carbon::now(),
            ],
        ];

        // Insert the data into the sales table
        foreach ($sales as $saleData) {
            Sales::create($saleData);
        }
    }
}
