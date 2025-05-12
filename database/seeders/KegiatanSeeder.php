<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run(){
    Kegiatan::create([
        'ukm_id' => 1,
        'nama_kegiatan' => 'Konser Kampus 2025',
        'deskripsi' => 'Konser internal UKM Musik untuk menyambut mahasiswa baru.',
        'tanggal' => '2025-06-01',
        'lokasi' => 'Aula Kampus'
    ]);
}

}
