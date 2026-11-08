<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        $admin->syncRoles(['Admin']);

        $staf = User::firstOrCreate(
            ['email' => 'staf@example.com'],
            [
                'name' => 'Staf User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        $staf->syncRoles(['Staf']);
    }
}
