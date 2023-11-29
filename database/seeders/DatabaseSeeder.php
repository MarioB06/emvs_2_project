<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::truncate();

        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123'),
        ]);
    }
}
