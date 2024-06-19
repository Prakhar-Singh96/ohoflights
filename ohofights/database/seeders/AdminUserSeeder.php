<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'admin@example.com',
            'password' => md5('admin123'), // MD5 hashed password
            'role' => 1, // Assuming 1 is the role ID for admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
