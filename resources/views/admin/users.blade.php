@extends('layouts.app')
@section('title', 'Data User')
@section('content')

<h3 class="mb-4">Data Semua Pengguna</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ ucfirst($user->role) }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
