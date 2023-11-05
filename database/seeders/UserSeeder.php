<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample user data
        $orders = [
            [
                'name' => 'Test User',
                'email' => 'test@gmail.com',
                'password' => Hash::make('test@123'),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'Default User',
                'email' => 'default@gmail.com',
                'password' => Hash::make('test@123'),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'New User',
                'email' => 'new@gmail.com',
                'password' => Hash::make('test@123'),
                'email_verified_at' => Carbon::now(),
            ],
        ];

        // Insert the data into the orders table
        foreach ($orders as $orderData) {
            User::create($orderData);
        }
    }
}
