<x-dosen>

@section('judul','SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
@section('judul2','Beranda')
@section('judul3','Kepengurusan')





<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row mb-3">

    <!-- New User Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Merek</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $merek }}</div>

              </div>
              <div class="col-auto">
                <i class="fas fa-edit fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Hak Cipta</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hakcipta }}</div>

              </div>
              <div class="col-auto">
                <i class="fab fa-fw fa-wpforms fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Paten</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kepemilikan }}</div>

              </div>
              <div class="col-auto">
                <i class="fas fa-file fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Kategori Pengajuan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $category }}</div>

              </div>
              <div class="col-auto">
                <i class="fas fa-list fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>




<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Kepengurusan Sihaki</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Pengurus</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php $no=1; ?>
                  @foreach ($tampil as $result)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$result-> name}}</td>
                    <td>{{$result-> jabatan}}</td>
                    <td>
                      <a href="{{ route('kepengurusan.show', $result->id) }}"class="btn btn-sm btn-success" ><i class="fas fa-eye "></i></a>
                    </td>
                </tr>
                  @endforeach
            </tbody>
            </table>
          </div>
        </div>
    </div>
</div>




</x-dosen>
