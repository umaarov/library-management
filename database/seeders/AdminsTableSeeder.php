<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'first_name' => 'Umarov',
            'last_name' => 'Ismoiljon',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'phone' => '1234567890',
        ]);

    }
}
