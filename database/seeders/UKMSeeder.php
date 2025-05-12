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
}
}
