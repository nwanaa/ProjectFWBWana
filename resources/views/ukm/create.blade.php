@extends('layouts.app')
@section('title', 'Tambah UKM')
@section('content')

<h4>Tambah UKM</h4>
<form action="{{ route('ukm.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label class="form-label">Nama UKM</label>
    <input type="text" name="nama_ukm" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required></textarea>
  </div>
  <button class="btn btn-success">Simpan</button>
</form>


@endsection
