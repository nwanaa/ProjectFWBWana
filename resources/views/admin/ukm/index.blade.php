@extends('layouts.app')
@section('title', 'Kelola UKM')
@section('content')

<h4>Semua Data UKM</h4>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Pengurus</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ukms as $ukm)
    <tr>
      <td>{{ $ukm->nama_ukm }}</td>
      <td>{{ $ukm->deskripsi }}</td>
      <td>{{ $ukm->pengurus->name ?? '-' }}</td>
      <td>
        <a href="{{ route('admin.ukm.edit', $ukm->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('admin.ukm.destroy', $ukm->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
