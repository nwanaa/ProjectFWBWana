@extends('layouts.app')
@section('title', 'Dashboard Mahasiswa')
@section('content')
<div class="container py-5">
  <h3 class="mb-4">Halo, {{ Auth::user()->name }} ({{ ucfirst(Auth::user()->role) }})</h3>

  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">UKM</h5>
          <p class="card-text">Lihat dan daftar UKM yang tersedia.</p>
          <a href="{{ route('ukm.mahasiswa') }}" class="btn btn-pink text-white" style="background-color: #ec407a">Lihat UKM</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Kegiatan</h5>
          <p class="card-text">Ikuti kegiatan UKM kamu.</p>
          <a href="{{ route('kegiatan.mahasiswa') }}" class="btn btn-success">Lihat Kegiatan</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection