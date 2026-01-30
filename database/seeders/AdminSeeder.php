<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Sudo',
            'last_name' => 'Admin',
            'email' => 'admin@swiftlypackage.com',
            'role' => 'Sudo',
            'avatar' => null,
            'email_verified_at' => now(),
            'password' => Hash::make('Ekeoba11@'),
            'remember_token' => Str::random(10),
        ]);
    }
}
