@extends('layouts.app')
@section('title', 'Tambah UKM')
@section('content')
<h2>Tambah UKM Baru</h2>
<form action="{{ route('ukm.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Nama UKM</label>
    <input type="text" name="nama_ukm" class="form-control">
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control"></textarea>
  </div>
  <button class="btn btn-success">Simpan</button>
</form>
@endsection