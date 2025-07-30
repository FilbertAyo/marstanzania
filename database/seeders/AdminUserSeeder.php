<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'kassim@marstanzania.com'],
            [
                'name' => 'Kassim Juma',
                'password' => Hash::make('123admin'),
            ]
        );
    }
}
