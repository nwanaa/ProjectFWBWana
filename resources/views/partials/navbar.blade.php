<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">UKM Kampus</a>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
  
          @auth
            <li class="nav-item">
              <span class="nav-link text-white">Hai, {{ Auth::user()->name }}</span>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('ukm.index') }}">UKM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('kegiatan.index') }}">Kegiatan</a>
            </li>
  
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link nav-link" style="border: none; background: none; padding: 0;">
                  Logout
                </button>
              </form>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
          @endauth
  
        </ul>
      </div>
    </div>
  </nav>
  