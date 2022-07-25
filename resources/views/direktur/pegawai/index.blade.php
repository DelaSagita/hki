<x-app>

@section('judul','Pegawai')
@section('sub_judul','Data Pegawai')


<div class="row justify-content-center">
    <div class="col-md-11">


<section class="content">
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">DATA PEGAWAI POLITEKNIK NEGERI KETAPANG</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>

            <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>NIP</center></th>
                        <th><center>NUP</center></th>
                        <th><center>NIK</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_pegawai as $item)
                    <tr>
                        <td><center>{{ $loop->iteration}}</center></td>
                        <td><center>{{ $item->nip}}</center></td>
                        <td><center>{{ $item->nup}}</center></td>
                        <td><center>{{ $item->nik}}</center></td>
                        <td><center>{{ $item->nama}}</center></td>
                        <td>
                            <center>
                                <div class="btn btn-group">
                                    <a href="{{ url('direktur-pegawai-detail', $item->id)}}" class="btn btn-sm btn-warning">
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

    </div>
</div>


</x-app>
