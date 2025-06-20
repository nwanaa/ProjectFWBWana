@extends('layouts.app')
@section('title', 'Profil Saya')
@section('content')

<div class="container py-5">
  <h3 class="mb-4">Profil Pengguna</h3>

  <div class="card shadow-sm">
    <div class="card-body">
      <h5 class="card-title">{{ $user->name }}</h5>
      <p><strong>Email:</strong> {{ $user->email }}</p>
      <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
    </div>
  </div>
</div>

@endsection
