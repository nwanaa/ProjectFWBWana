@extends('layouts.app')
@section('title', 'Register')
@section('content')

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-center mb-4">Daftar Akun Baru</h4>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-success w-100">Daftar</button>
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
