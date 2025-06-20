@extends('layouts.app')
@section('title', 'Edit Kegiatan')
@section('content')

<h4>Edit Kegiatan</h4>

<form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
  @csrf @method('PUT')
  <div class="mb-3">
    <label>Nama Kegiatan</label>
    <input type="text" name="nama_kegiatan" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required>{{ $kegiatan->deskripsi }}</textarea>
  </div>
  <div class="mb-3">
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control" value="{{ $kegiatan->tanggal }}" required>
  </div>
  <div class="mb-3">
    <label>Lokasi</label>
    <input type="text" name="lokasi" class="form-control" value="{{ $kegiatan->lokasi }}" required>
  </div>
  <div class="mb-3">
    <label>UKM</label>
    <select name="ukm_id" class="form-control" required>
      @foreach($ukms as $ukm)
        <option value="{{ $ukm->id }}" @if($kegiatan->ukm_id == $ukm->id) selected @endif>
          {{ $ukm->nama_ukm }}
        </option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
