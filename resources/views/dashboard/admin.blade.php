@extends('layouts.app')
@section('title', 'Dashboard Admin')
@section('content')
<div class="container py-5">
  <h3 class="mb-4">Halo Admin</h3>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Manajemen UKM</h5>
          <a href="{{ route('ukm.index') }}" class="btn btn-primary">Lihat UKM</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Manajemen User</h5>
          <a href="{{ route('admin.users') }}" class="btn btn-info">Data User</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Manajemen Kegiatan</h5>
          <a href="{{ route('kegiatan.index') }}" class="btn btn-success">Data Kegiatan</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection