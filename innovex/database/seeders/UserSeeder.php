<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Student One',
            'email' => 'student@test.com',
            'password' => Hash::make('password'),
            'role' => 'student'
        ]);

        User::create([
            'name' => 'Faculty One',
            'email' => 'faculty@test.com',
            'password' => Hash::make('password'),
            'role' => 'faculty'
        ]);

        User::create([
            'name' => 'Org One',
            'email' => 'org@test.com',
            'password' => Hash::make('password'),
            'role' => 'org'
        ]);

        User::create([
            'name' => 'Admin One',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}
