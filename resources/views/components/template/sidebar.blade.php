<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset ('gambar/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIHAKI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('assets2/img/gallery/user.png')  }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/direktur') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>

        <li class="nav-item">
            <a href="{{ url('direktur/pegawai') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Pegawai</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pengajuan Hak Cipta
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('direktur-permohonan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('direktur-pengalihan/hak-cipta') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pengalihan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('direktur-pernyataan/hak-cipta') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pernyataan</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-fw fa-wpforms"></i>
              <p>
                Pengajuan Paten
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('direktur-paten/penyerahan-hak') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penyerahan Hak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('direktur-paten/pernyataan-kepemilikan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kepemilikan</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-fw fa-wpforms"></i>
              <p>
                Pengajuan Merek
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('direktur/merek') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mengajukan</p>
                </a>
              </li>
            </ul>
        </li>

       {{--}} <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengajuan HaKi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('direktur') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengajuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('direktur') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sertifikat</p>
                </a>
              </li>
            </ul>
        </li> --}}

        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="fas fa-power-off mr-2"></i>
              <p>Logout</p>
            </a>
        </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
