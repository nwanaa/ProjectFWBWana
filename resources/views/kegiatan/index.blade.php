@extends('layouts.app')
@section('title', 'Daftar Kegiatan')
@section('content')

<h4>Daftar Kegiatan UKM Saya</h4>

@auth
  @if(Auth::user()->role === 'pengurus')
    <a href="{{ route('kegiatan.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>
  @endif
@endauth

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Tanggal</th>
      <th>Lokasi</th>
      <th>UKM</th>
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
      <td>{{ $item->ukm->nama_ukm }}</td>
      <td>
        <a href="{{ route('kegiatan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
