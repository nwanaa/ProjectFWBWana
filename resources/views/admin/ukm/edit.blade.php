@extends('layouts.app')
@section('title', 'Edit UKM')
@section('content')

<h4>Edit Data UKM</h4>

<form action="{{ route('admin.ukm.update', $ukm->id) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3">
    <label>Nama UKM</label>
    <input type="text" name="nama_ukm" value="{{ $ukm->nama_ukm }}" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required>{{ $ukm->deskripsi }}</textarea>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>


@endsection
