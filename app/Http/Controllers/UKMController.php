<?php

namespace App\Http\Controllers;


use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UKMController extends Controller
{
    /**
     * Tampilkan semua UKM yang dikelola oleh pengurus login
     */
    public function index()
{
    if (Auth::user()->role === 'admin') {
        $ukms = UKM::with('pengurus')->get(); // admin bisa lihat semua
    } else {
        $ukms = UKM::where('pengurus_id', Auth::id())->get(); // pengurus hanya miliknya
    }

    return view('ukm.index', compact('ukms'));
}


    /**
     * Tampilkan form untuk tambah UKM
     */
    public function create()
    {
        return view('ukm.create');
    }

    /**
     * Simpan data UKM baru ke database
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_ukm' => 'required',
        'deskripsi' => 'required',
    ]);

    DB::transaction(function () use ($request) {
        UKM::create([
            'nama_ukm' => $request->nama_ukm,
            'deskripsi' => $request->deskripsi,
            'pengurus_id' => Auth::id()
        ]);
    });

    return redirect()->route('ukm.index')->with('success', 'UKM berhasil ditambahkan.');
}


    /**
     * Tampilkan detail 1 UKM (kalau ingin ada show.blade.php)
     */
    public function show(string $id)
    {
        $ukm = UKM::findOrFail($id);
        return view('ukm.show', compact('ukm'));
    }

    /**
     * Tampilkan form edit UKM
     */
    public function edit(string $id)
    {
        $ukm = UKM::findOrFail($id);
        return view('ukm.edit', compact('ukm'));
    }

    /**
     * Simpan perubahan UKM ke database
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_ukm' => 'required',
            'deskripsi' => 'required'
        ]);

        $ukm = UKM::findOrFail($id);
        $ukm->update($request->only('nama_ukm', 'deskripsi'));

        return redirect()->route('ukm.index')->with('success', 'UKM berhasil diperbarui.');
    }

    /**
     * Hapus UKM dari database
     */
    public function destroy(string $id)
    {
        $ukm = UKM::findOrFail($id);
        $ukm->delete();

        return redirect()->route('ukm.index')->with('success', 'UKM berhasil dihapus.');
    }
}
