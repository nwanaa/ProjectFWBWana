@extends('layouts.app')
@section('title', 'Dashboard Pengurus')
@section('content')
<div class="container py-5">
  <h3 class="mb-4">Selamat datang, {{ Auth::user()->name }} (Pengurus UKM)</h3>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5>Kelola UKM Anda</h5>
          <p>Lihat dan ubah data UKM yang kamu kelola.</p>
          <a href="{{ route('ukm.index') }}" class="btn btn-primary">Kelola UKM</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5>Buat Kegiatan</h5>
          <p>Tambahkan kegiatan baru untuk UKM kamu.</p>
          <a href="{{ route('kegiatan.create') }}" class="btn btn-success">Tambah Kegiatan</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection