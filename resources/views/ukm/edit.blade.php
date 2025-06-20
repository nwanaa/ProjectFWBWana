@extends('layouts.app')
@section('title', 'Edit UKM')
@section('content')

<h4>Edit UKM</h4>
<form action="{{ route('ukm.update', $ukm->id) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3">
    <label class="form-label">Nama UKM</label>
    <input type="text" name="nama_ukm" class="form-control" value="{{ $ukm->nama_ukm }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required>{{ $ukm->deskripsi }}</textarea>
  </div>
  <button class="btn btn-primary">Update</button>
</form>

@endsection
