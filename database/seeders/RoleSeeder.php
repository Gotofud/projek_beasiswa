<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'AdminLaskar@admin.org',
            'role' => 'admin',
            'password' => bcrypt('admin12345678'),
        ]);

        User::create([
            'name' => 'Fazli Rausyan Fikri',
            'email' => 'timlaskar@reviewer.org',
            'role' => 'reviewer',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Sulis Alisa Putri',
            'email' => 'timlaskar2@reviewer.org',
            'role' => 'reviewer',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt('12345678'),
        ]);
    }
}
