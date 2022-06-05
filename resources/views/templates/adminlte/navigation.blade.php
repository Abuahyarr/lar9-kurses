    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{url('/')}}" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li> -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <div class="brand-logo text-center">
      <!-- Brand Logo -->
      <a href="{{url('/')}}" class="brand-link">
        <!-- <img src="{{url('images/logo.png')}}" alt="Apps Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <img src="{{url('images/kurses-bg.png')}}" alt="Apps Logo" width="150px">
        <!-- <span class="brand-text font-weight-light">Kurses</span> -->
      </a>
      </div>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ url('uploads/user') }}/{{ Auth::user()->picture }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            @if(auth()->user())
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            @else
            Guess
            @endif
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
            <li class="nav-header">ADMIN</li>
            <li class="nav-item has-treeview {{request()->is('admin/materi') ? 'menu-open' : 'menu-close'}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Materi<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/materi') }}" class="nav-link {{request()->is('admin/materi') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="{{ url('admin/materi/report') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Report</p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item has-treeview {{request()->is('admin/tugas') ? 'menu-open' : 'menu-close'}}">
              <a href="#" class="nav-link {{request()->is('tugas') ? 'active' : ''}}">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Tugas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/tugas') }}" class="nav-link {{request()->is('admin/tugas') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="{{ url('admin/tugas/check') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Periksa Tugas</p>
                  </a>
                </li> -->
              </ul>
            </li>
            @if($loggedinInfo->role_id == 1)
            <li class="nav-item">
              <a href="{{url('tugas-exec')}}" class="nav-link {{request()->is('tugas-exec') ? 'active' : ''}}">
                <i class="nav-icon fas fa-tasks"></i>
                <p>Tugas Ku</p>
              </a>
            </li>
            @endif
            @if($loggedinInfo->role_id != 1)
            <li class="nav-item">
              <a href="{{url('admin/user')}}" class="nav-link {{request()->is('admin/user') ? 'active' : ''}}">
                <i class="nav-icon fas fa-users"></i>
                <p>Pengguna</p>
              </a>
            </li>
            @endif

            <li class="nav-header">ACCOUNT</li>
            <li class="nav-item">
              <a href="{{url('account/profile')}}" class="nav-link {{request()->is('account/profile') ? 'active' : ''}}">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>Profil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('account/dashboard')}}" class="nav-link {{request()->is('account/dashboard') ? 'active' : ''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            @if(auth()->user())
            <li class="nav-item">
              <a href="{{url('logout')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Logout</p>
              </a>
            </li>
            @endif

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>