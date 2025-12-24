<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
    ['username' => 'admin'],
    [
        'name' => 'Admin',
        'email' => 'admin@cashflow.local', // keep but not used
        'password' => Hash::make('password'),
    ]
);


    }
}
