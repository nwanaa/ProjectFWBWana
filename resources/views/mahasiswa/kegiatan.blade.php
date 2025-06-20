@extends('layouts.app')
@section('title', 'Kegiatan UKM Saya')
@section('content')

<h4>Kegiatan dari UKM yang Kamu Ikuti</h4>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nama Kegiatan</th>
      <th>Deskripsi</th>
      <th>Tanggal</th>
      <th>Lokasi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($kegiatan as $item)
    <tr>
      <td>{{ $item->nama_kegiatan }}</td>
      <td>{{ $item->deskripsi }}</td>
      <td>{{ $item->tanggal }}</td>
      <td>{{ $item->lokasi }}</td>
      <td>
        @if(in_array($item->id, $sudahDaftar))
          <span class="badge bg-secondary">Sudah daftar</span>
        @else
          <form action="{{ route('kegiatan.daftar', $item->id) }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-primary">Daftar</button>
          </form>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
