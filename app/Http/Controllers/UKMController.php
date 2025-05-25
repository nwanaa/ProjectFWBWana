<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use Illuminate\Http\Request;

class UKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ukms = UKM::all();
        return view('ukm.index', compact('ukms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UKM::create($request->all());
    return redirect()->route('ukm.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ukm = UKM::findOrFail($id);
    return view('ukm.show', compact('ukm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
