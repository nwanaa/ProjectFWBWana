@extends('layouts.app')
@section('title', 'Daftar UKM')
@section('content')

<h4>Daftar UKM Tersedia</h4>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nama UKM</th>
      <th>Deskripsi</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ukms as $ukm)
    <tr>
      <td>{{ $ukm->nama_ukm }}</td>
      <td>{{ $ukm->deskripsi }}</td>
      <td>
        @if(in_array($ukm->id, $anggota))
          <span class="text-success">Sudah daftar</span>
        @else
          <span class="text-muted">Belum daftar</span>
        @endif
      </td>
      <td>
        @if(!in_array($ukm->id, $anggota))
          <form action="{{ route('ukm.daftar', $ukm->id) }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-primary">Daftar</button>
          </form>
        @else
          <button class="btn btn-sm btn-secondary" disabled>Terdaftar</button>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
