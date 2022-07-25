@extends('template_admin.home')
@section('judul','SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
@section('sub_judul','Home')
@section('content')


<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Kepengurusan</h5>
                    <h2 class="mb-0">{{ $pengelola }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                    <i class="fa fa-user fa-fw fa-sm text-info"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Kategori</h5>
                    <h2 class="mb-0">{{ $category }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                    <i class="fa fa-eye fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Merek</h5>
                    <h2 class="mb-0">{{ $merek }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                    <i class="fas fa-table fa-fw fa-sm text-brand"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Pegawai</h5>
                    <h2 class="mb-0">{{ $pegawai }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                    <i class="fas fa-users fa-fw fa-sm text-secondary"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Hak Cipta</h5>
                    <h2 class="mb-0">{{ $hakcipta }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                    <i class="fab fa-fw fa-wpforms fa-fw fa-sm text-info"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Paten</h5>
                    <h2 class="mb-0">{{ $kepemilikan }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                    <i class="fa fa-edit fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Pengajuan</h5>
                    <h2 class="mb-0">{{ $pengajuan }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                    <i class="fas fa-file-pdf fa-fw fa-sm text-brand"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Sertifikat</h5>
                    <h2 class="mb-0">{{ $sertifikat }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg bg-secondary-light mt-1">
                    <i class="fas fa-download fa-fw fa-sm text-secondary"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
