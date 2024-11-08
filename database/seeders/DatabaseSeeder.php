<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Master User',
            'email' => 'master@gmail.com',
            'password' => Hash::make('senhaMaster'),
            'is_admin' => true,
            'is_master' => true,
        ]);
    }
}
