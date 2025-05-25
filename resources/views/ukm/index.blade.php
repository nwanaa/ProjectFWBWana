@extends('layouts.app')
@section('title', 'Daftar UKM')
@section('content')

<h2 class="mb-4">Daftar Unit Kegiatan Mahasiswa (UKM)</h2>

<div class="row">
  @forelse($ukms as $ukm)
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">{{ $ukm->nama_ukm }}</h5>
          <p class="card-text">{{ $ukm->deskripsi }}</p>
          <a href="{{ route('ukm.show', $ukm->id) }}" class="btn btn-outline-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
  @empty
    <p class="text-muted">Belum ada UKM tersedia.</p>
  @endforelse
</div>

@endsection
