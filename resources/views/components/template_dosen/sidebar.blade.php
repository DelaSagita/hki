<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/beranda') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset ('gambar/logo.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">SENTRA HaKI</div>
    </a>
    <hr class="sidebar-divider my-0">

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <center> Menu </center>
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dosen') }}">
            <i class="fas fa-home"></i>
            <span>Beranda</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
            aria-expanded="true" aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Hak Merek</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('pegawai/merek') }}">Pengajuan Merek</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2"
            aria-expanded="true" aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Hak Cipta</span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('hak-cipta/pendaftaran-ciptaan') }}">Pendaftaran</a>
                <a class="collapse-item" href="{{ url('hak-cipta/pengalihan-hak-cipta') }}">Surat Pengalihan</a>
                <a class="collapse-item" href="{{ url('hak-cipta/pernyataan-hak-cipta') }}">Surat Pernyataan</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable3"
            aria-expanded="true" aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Hak Paten</span>
        </a>
        <div id="collapseTable3" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('hak-paten/penyerahan-hak') }}"> Penyerahan Hak</a>
                <a class="collapse-item" href="{{ url('hak-paten/pernyataan-kepemilikan') }}">Surat Kepemilikan</a>
            </div>
        </div>
    </li>

   {{--}} <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable4"
            aria-expanded="true" aria-controls="collapseTable">
            <i class="fas fa-fw fa-list"></i>
            <span>Pengajuan HaKI</span>
        </a>
        <div id="collapseTable4" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('/dosen/paten') }}">Data Pengajuan</a>
                <a class="collapse-item" href="{{ url('/dosen/hakcipta') }}">Sertifikat</a>
            </div>
        </div>
    </li> --}}


    <hr class="sidebar-divider">
    <div class="sidebar-heading">

</ul>
<!--End Sidebar -->
