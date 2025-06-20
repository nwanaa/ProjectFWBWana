<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UKM;

class UKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    UKM::create([
        'nama_ukm' => 'UKM Musik',
        'deskripsi' => 'Unit Kegiatan Mahasiswa Musik Kampus',
        'pengurus_id' => 2 // id user pengurus
    ]);

       
    UKM::create([
        'nama_ukm' => 'UKM Tari',
        'deskripsi' => 'Unit Kegiatan Mahasiswa Tari Kampus',
        'pengurus_id' => 3 // Pengurus 2
    ]);
    
    UKM::create([
        'nama_ukm' => 'UKM Riset',
        'deskripsi' => 'Unit Kegiatan Mahasiswa Penelitian dan Riset',
        'pengurus_id' => 4 // Pengurus 3
    ]);
}
}
