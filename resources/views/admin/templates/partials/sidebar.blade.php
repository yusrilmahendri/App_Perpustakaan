<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
  <img src="{{  asset('images/logo.png') }}" alt="logo"
   class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">PERPUS SD AIRO</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{  asset('images/default.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>

    <div class="info">
      <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
     role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="{{ url('/admin') }}" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-header">BUKU</li>
      <li class="nav-item">
        <a href="{{ url('/admin/book') }}" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Data Buku
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/admin/book/create') }}" class="nav-link">
          <i class="nav-icon fas fa-book-medical"></i>
          <p>
            Daftarkan Buku
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/admin/borrow') }}" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Data Pinjam Buku
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/admin/report/top-book') }}" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Data Buku Terlaris
          </p>
        </a>
      </li>

    <li class="nav-header">PENULIS</li>
      <li class="nav-item">
        <a href="{{ url('/admin/author') }}" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>Data Penulis</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/admin/author/create') }}" class="nav-link">
          <i class="nav-icon fas fa-plus"></i>
          <p>Daftarkan Penulis</p>
        </a>
      </li>

      <li class="nav-header">PENGGUNA</li>
      <li class="nav-item">
        <a href="{{ url('/admin/pengguna') }}" class="nav-link">
          <i class="fas fa-users nav-icon"></i>
          <p>Data Pengguna</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/admin/report/top-user') }}" class="nav-link">
          <i class="fas fa-users nav-icon"></i>
          <p>Data Pengguna Populer</p>
        </a>
      </li>

      {{--  <li class="nav-header">RIWAYAT</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-danger"></i>
          <p class="text">Data Riwayat</p>
        </a>
      </li>  --}}

      <li class="nav-header">KELUAR</li>
      <li class="nav-item">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Keluar</p>
        </a>

        <form id="logout-form" action="{{ route('logout') }}"
        method="POST" style="display: none;">
             @csrf
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
