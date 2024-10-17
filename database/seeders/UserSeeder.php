<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'karyawan aplikasi',
            'level' => 'karyawan',
            'email' => 'karyawan@gmail.com',
            'password' => bcrypt('karyawan'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'Admin aplikasi',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
    }
}
