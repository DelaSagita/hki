@extends('template_admin.home')
@section('judul','Pegawai')
@section('sub_judul','Data Pegawai')
@section('content')


    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('pegawai/create')}}" class="btn btn-sm btn-success float-right">
                        <i class="fa fa-plus"></i>
                        <span>Tambah data</span>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table dataTable">
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
                                            <a href="{{ url('pegawai-detail', $item->id)}}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ url('pegawai-update', $item->id)}}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ url('pegawai/delete', $item->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>

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


@endsection
