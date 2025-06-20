<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use App\Models\AnggotaUKM;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendaftaranUKMController extends Controller
{
    public function index()
    {
        $ukms = UKM::all();
        $anggota = AnggotaUKM::where('user_id', Auth::id())->pluck('ukm_id')->toArray();

        return view('mahasiswa.ukm', compact('ukms', 'anggota'));
    }

    public function daftar($id)
{
    DB::transaction(function () use ($id) {
        AnggotaUKM::create([
            'user_id' => Auth::id(),
            'ukm_id' => $id,
            'status' => 'menunggu'
        ]);
    });

    return redirect()->route('ukm.mahasiswa')->with('success', 'Pendaftaran berhasil.');
}

}
