  		<!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="{{ url('/home') }}">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('/home') }}" aria-expanded="false" ><i class="fa fa-fw fa-home"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-6"><i class="fas fa-fw fa-list"></i>Organisasi</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/pengelola') }}">Stuktur Kepengurusan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/category') }}">Kategori</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="fab fa-fw fa-wpforms"></i>Pengajuan Merek</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/merek') }}">Data Merek</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-2"><i class="fab fa-fw fa-wpforms"></i>Pengajuan Hak Cipta</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin-cipta/pendaftaran-ciptaan') }}">Pendaftaran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin-cipta/pengalihan-hak-cipta') }}"> Surat Pengalihan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin-cipta/pernyataan-hak-cipta') }}">Surat Pernyataan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-2"><i class="fab fa-fw fa-wpforms"></i>Pengajuan Paten</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin-paten/penyerahan-hak') }}">Penyerahan Hak</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin-paten/pernyataan-kepemilikan') }}">Pernyataan Kepemilikan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-3"><i class="fas fa-fw fa-table"></i>Data Pengajuan</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/pengajuan') }}"> Pengajuan </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('sertifikat') }}"> Sertifikat </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-4"><i class="fas fa-fw fa-users"></i>Penguna</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/pegawai') }}"> Pegawai </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/dosen') }}"> Modul Pegawai </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/direktur') }}"> Modul Direktur </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>



                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">@yield('judul')</h2>
                                <p class="pageheader-text">SIHAKI | Sistem Informasi Hak Kekayaan Intelektual.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">@yield('sub_judul')</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- @foreach(['success', 'danger', 'warning',] as $status)
                        @if(session($status))
                            <div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
                                <strong class="text-white">{{session($status)}}</strong>
                                <a href="" class="close" data-dismiss="alert" aria-label="close" style="float: right;">&times;</a>
                            </div>
                        @endif
                    @endforeach --}}

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

