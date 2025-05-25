@extends('layouts.app')
@section('title', 'Tambah Kegiatan')
@section('content')
<h2>Tambah Kegiatan Baru</h2>
<form action="{{ route('kegiatan.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Nama Kegiatan</label>
    <input type="text" name="nama_kegiatan" class="form-control">
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control">
  </div>
  <div class="mb-3">
    <label>Lokasi</label>
    <input type="text" name="lokasi" class="form-control">
  </div>
  <button class="btn btn-success">Simpan</button>
</form>
@endsection