@extends('template_admin.home')
@section('judul','Merek')
@section('sub_judul','Pengajuan Merek')
@section('content')


<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{url('admin-merek/add')}}" class="btn btn-success float-right">
                    <i class="fa fa-plus"></i>
                    <span>Ajukan Merek</span>
                </a>

            </div>
            <div class="card-body">
                <table class="table dataTable">
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

                                        <a href="{{ url('admin-merek-detail', $data->id_merek)}}" class="btn btn-warning">
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








    {{-- @foreach($dosen as $key => $item)
    <a href="{{ asset($item->image) }}"><button>DOWNLOAD</button></a>
    @endforeach ($dosen as $item) --}}



@endsection

