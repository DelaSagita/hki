<x-app>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('sub_judul', 'Merek')



    <section class="content">
        <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DATA PENGAJUAN</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>

                <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
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
                                        <a href="{{ url('direktur-merek-detail', $data->id_merek)}}" class="btn btn-warning">
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
    </section>


</x-app>
