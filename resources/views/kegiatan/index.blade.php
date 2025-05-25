@extends('layouts.app')
@section('title', 'Daftar Kegiatan')
@section('content')
<h2>Daftar Kegiatan</h2>
<a href="{{ route('kegiatan.create') }}" class="btn btn-primary mb-3">+ Tambah Kegiatan</a>
<table class="table table-bordered">
  <thead><tr><th>Nama</th><th>Tanggal</th><th>Lokasi</th></tr></thead>
  <tbody>
    @foreach($kegiatans as $kegiatan)
    <tr>
      <td>{{ $kegiatan->nama_kegiatan }}</td>
      <td>{{ $kegiatan->tanggal }}</td>
      <td>{{ $kegiatan->lokasi }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection