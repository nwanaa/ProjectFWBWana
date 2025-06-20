<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - UKM Kampus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html {
      height: 100%;
    }
    body {
      background-color: #f5f8fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: #1e3a8a;
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    footer p {
      font-weight: bold;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">UKM Kampus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile') }}">Profil</a>
            </li>

            @if(Auth::user()->role === 'mahasiswa')
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ukm.mahasiswa') }}">UKM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('kegiatan.mahasiswa') }}">Kegiatan</a>
              </li>
            @endif

            @if(Auth::user()->role === 'pengurus')
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.pengurus') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ukm.index') }}">UKM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('kegiatan.index') }}">Kegiatan</a>
              </li>
            @endif

            @if(Auth::user()->role === 'admin')
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.admin') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.ukm.index') }}">UKM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('kegiatan.index') }}">Kegiatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users') }}">Data User</a> 
              </li>
            @endif

            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-light ms-2">Logout</button>
              </form>
            </li>
          @else
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten utama -->
  <div class="container mt-4 flex-grow-1">
    @yield('content')
  </div>

  <!-- Footer selalu di bawah -->
  <footer class="text-center mt-auto mb-3 text-muted">
    <hr>
    <p>&copy; 2025 - Sistem UKM Kampus</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
