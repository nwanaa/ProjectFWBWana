@extends('layouts.app')
@section('title', 'Tambah Kegiatan')
@section('content')

<h4>Tambah Kegiatan</h4>

<form action="{{ route('kegiatan.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Nama Kegiatan</label>
    <input type="text" name="nama_kegiatan" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required></textarea>
  </div>
  <div class="mb-3">
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Lokasi</label>
    <input type="text" name="lokasi" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>UKM</label>
    <select name="ukm_id" class="form-control" required>
      @foreach($ukms as $ukm)
        <option value="{{ $ukm->id }}">{{ $ukm->nama_ukm }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>

@endsection
