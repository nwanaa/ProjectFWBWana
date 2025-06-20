<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\UKM;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (Auth::user()->role === 'admin') {
        $kegiatan = Kegiatan::with('ukm')->get(); // admin bisa lihat semua
    } else {
        $kegiatan = Kegiatan::whereHas('ukm', function ($query) {
            $query->where('pengurus_id', Auth::id());
        })->get(); // pengurus hanya miliknya
    }

    return view('kegiatan.index', compact('kegiatan'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ukms = UKM::where('pengurus_id', Auth::id())->get();
        return view('kegiatan.create', compact('ukms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_kegiatan' => 'required',
        'deskripsi' => 'required',
        'tanggal' => 'required|date',
        'lokasi' => 'required',
        'ukm_id' => 'required'
    ]);

    DB::transaction(function () use ($request) {
        Kegiatan::create($request->all());
    });

    return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        $ukms = UKM::where('pengurus_id', Auth::id())->get();
        return view('kegiatan.edit', compact('kegiatan', 'ukms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'ukm_id' => 'required'
        ]);

        $kegiatan->update($request->all());

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
