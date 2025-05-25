@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <h3 class="text-center">Login</h3>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</div>
@endsection