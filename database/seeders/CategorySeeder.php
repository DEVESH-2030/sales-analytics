<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Seed your product categories here
        Category::create([
            'name' => 'Electronics',
            'description' => 'Electronics products category',
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'Clothing products category',
        ]);

        Category::create([
            'name' => 'Phone',
            'description' => 'Phone products category',
        ]);

        // Add more categories as needed
    }
}
