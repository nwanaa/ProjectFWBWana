<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-text mx-3">UKM Kampus</div>
    </a>
  
    <hr class="sidebar-divider">
  
    @if(Auth::check())
      <!-- Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.' . Auth::user()->role) }}">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
  
      <!-- Mahasiswa Menu -->
      @if(Auth::user()->role === 'mahasiswa')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ukm.mahasiswa') }}">
            <i class="fas fa-users"></i>
            <span>Daftar UKM</span>
          </a>
          <a class="nav-link" href="{{ route('kegiatan.mahasiswa') }}">
            <i class="fas fa-calendar"></i>
            <span>Kegiatan</span>
          </a>
        </li>
      @endif
  
      <!-- Pengurus Menu -->
      @if(Auth::user()->role === 'pengurus')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ukm.index') }}">
            <i class="fas fa-briefcase"></i>
            <span>UKM Saya</span>
          </a>
          <a class="nav-link" href="{{ route('kegiatan.index') }}">
            <i class="fas fa-tasks"></i>
            <span>Kegiatan</span>
          </a>
        </li>
      @endif
  
      <!-- Admin Menu -->
      @if(Auth::user()->role === 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.ukm') }}">
            <i class="fas fa-database"></i>
            <span>Kelola UKM</span>
          </a>
        </li>
      @endif
  
      <!-- Logout -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST" class="nav-link m-0 p-0">
          @csrf
          <button class="btn text-white w-100 text-start">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
      </li>
    @endif
  
  </ul>
  