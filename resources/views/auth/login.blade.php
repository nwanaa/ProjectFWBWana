@extends('layouts.app')
@section('title', 'Login')
@section('content')

<style>
  body {
    background-color: #f8f9fc;
  }
  .login-container {
    min-height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>

<div class="login-container">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-center mb-4">Login Akun</h4>

        @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST" >
          @csrf
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" autocomplete="email" required>
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" autocomplete="current-password" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  setTimeout(() => {
    const alert = document.querySelector('.alert');
    if(alert) alert.remove();
  }, 3000);
</script>

@endsection
