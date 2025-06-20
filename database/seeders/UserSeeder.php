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
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

        // Pengurus 1
        User::create([
            'name' => 'Pengurus UKM Musik',
            'email' => 'pengurus1@ukm.com',
            'password' => Hash::make('pengurus1'),
            'role' => 'pengurus'
        ]);
        
        // Pengurus 2
        User::create([
            'name' => 'Pengurus UKM Tari',
            'email' => 'pengurus2@ukm.com',
            'password' => Hash::make('pengurus2'),
            'role' => 'pengurus'
        ]);
        
        // Pengurus 3
        User::create([
            'name' => 'Pengurus UKM Riset',
            'email' => 'pengurus3@ukm.com',
            'password' => Hash::make('pengurus3'),
            'role' => 'pengurus'
        ]);

        // Mahasiswa
        User::create([
            'name' => 'Wana Mahasiswa',
            'email' => 'wana@mahasiswa.com',
            'password' => Hash::make('mahasiswa'),
            'role' => 'mahasiswa'
        ]);
    }
}
