<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Admin
        User::create([
            'name' => 'Admin Kampus',
            'email' => 'admin@kampus.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        // Pengurus
        User::create([
            'name' => 'Pengurus Musik',
            'email' => 'pengurus@ukm.com',
            'password' => Hash::make('password'),
            'role' => 'pengurus'
        ]);

        // Mahasiswa
        User::create([
            'name' => 'Wana Mahasiswa',
            'email' => 'wana@mahasiswa.com',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa'
        ]);
    }
}
