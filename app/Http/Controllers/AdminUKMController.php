<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use Illuminate\Http\Request;

class AdminUKMController extends Controller
{
    public function index()
    {
        $ukms = UKM::with('pengurus')->get();
        return view('admin.ukm.index', compact('ukms'));
    }

    public function edit($id)
    {
        $ukm = UKM::findOrFail($id);
        return view('admin.ukm.edit', compact('ukm'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ukm' => 'required|string|max:100',
            'deskripsi' => 'required|string'
        ]);

        $ukm = UKM::findOrFail($id);
        $ukm->update([
            'nama_ukm' => $request->nama_ukm,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.ukm')->with('success', 'UKM berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $ukm = UKM::findOrFail($id);
        $ukm->delete();

        return redirect()->route('admin.ukm')->with('success', 'UKM berhasil dihapus.');
    }
}
