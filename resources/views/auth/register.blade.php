@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <h3 class="text-center">Register</h3>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-success w-100">Daftar</button>
    </form>
  </div>
</div>
@endsection