<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Kegiatan untuk UKM Musik (ukm_id: 1)
        Kegiatan::create([
            'ukm_id' => 1,
            'nama_kegiatan' => 'Konser Kampus 2025',
            'deskripsi' => 'Konser internal UKM Musik untuk menyambut mahasiswa baru.',
            'tanggal' => '2025-06-01',
            'lokasi' => 'Aula Kampus'
        ]);

        // Kegiatan untuk UKM Tari (ukm_id: 2)
        Kegiatan::create([
            'ukm_id' => 2,
            'nama_kegiatan' => 'Pentas Seni Tari Nusantara',
            'deskripsi' => 'Pertunjukan tari dari berbagai daerah oleh anggota UKM Tari.',
            'tanggal' => '2025-06-10',
            'lokasi' => 'Auditorium Utama'
        ]);

        // Kegiatan untuk UKM Riset (ukm_id: 3)
        Kegiatan::create([
            'ukm_id' => 3,
            'nama_kegiatan' => 'Seminar Penelitian Mahasiswa',
            'deskripsi' => 'Presentasi hasil riset oleh anggota UKM Riset.',
            'tanggal' => '2025-06-20',
            'lokasi' => 'Ruang Seminar FTI'
        ]);
    }
}
