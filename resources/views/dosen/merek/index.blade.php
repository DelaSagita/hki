<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Merek')
    @section('judul3', 'Pengajuan Merek')


    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">PENGAJUAN MEREK</h6>
                <a href="{{ url('pegawai-merek/add') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Permohonan</a>
              </div>
              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <thead class="thead-light">
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Nama Pengaju</center></th>
                        <th><center>Nama Merek</center></th>
                        <th><center>Jenis Merek</center></th>
                        <th><center>Action</center></th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td><center>{{ $loop->iteration}}</center></td>
                        <td><center>{{ $data->nama_pengaju}}</center></td>
                        <td><center>{{ $data->nama_merek}}</center></td>
                        <td><center>{{ $data->jenis}}</center></td>
                        <td>
                            <center>
                                <div class="btn btn-group">
                                    <a href="{{ url('pegawai-merek-detail', $data->id_merek)}}" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </center>
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
