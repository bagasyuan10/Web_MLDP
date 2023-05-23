<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an Admin
        DB::table('admins')->insert([
            'name' => 'Admin',
            'NIA' => '123456789',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('password'),
            'remember_token' => Str::random(10),
        ]);

    }
}
