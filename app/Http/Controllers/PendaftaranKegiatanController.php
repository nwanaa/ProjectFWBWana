<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\PendaftaranKegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PendaftaranKegiatanController extends Controller
{
    public function index()
    {
        // Ambil semua kegiatan dari UKM yang diikuti mahasiswa
        $user = Auth::user();

        $kegiatan = Kegiatan::whereIn('ukm_id', function ($query) use ($user) {
            $query->select('ukm_id')
                ->from('anggota_ukm')
                ->where('user_id', $user->id);
        })->get();

        $sudahDaftar = PendaftaranKegiatan::where('user_id', $user->id)
                                           ->pluck('kegiatan_id')
                                           ->toArray();

        return view('mahasiswa.kegiatan', compact('kegiatan', 'sudahDaftar'));
    }

    public function daftar($id){
    DB::transaction(function () use ($id) {
        PendaftaranKegiatan::create([
            'user_id' => Auth::id(),
            'kegiatan_id' => $id,
            'status' => 'terdaftar'
        ]);
    });

    return redirect()->back()->with('success', 'Berhasil daftar kegiatan.');
}

}
