<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nim' => 12345678,
            'name' => 'Pakguru',
            'role' => 'admin',
            'email' => 'Pakguru@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'nim' => 87654321,
            'name' => 'Ari',
            'role' => 'siswa',
            'email' => 'ari@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
