<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Profile::create([
        'user_id' => 3, // id mahasiswa
        'nim' => '22030001',
        'jurusan' => 'Informatika',
        'alamat' => 'Makassar'
    ]);
}
}
