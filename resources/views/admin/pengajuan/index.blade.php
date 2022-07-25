@extends('template_admin.home')
@section('judul','Pengajuan')
@section('sub_judul','Data Pengajuan')
@section('content')


    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('pengajuan/add')}}" class="btn btn-success float-right">
                        <i class="fa fa-plus"></i>
                        <span>Tambah data</span>
                    </a>

                </div>
                <div class="card-body">
                    <table class="table dataTable">
                        <thead>
                            <tr>
                                <th><center>NO</center></th>
                                <th><center>NAMA PENGAJU</center></th>
                                <th><center>JENIS PENGAJUAN</center></th>
                                <th><center>JUDUL</center></th>
                                <th><center>STATUS</center></th>
                                <th><center>ACTION</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pengajuan as $item)
                            <tr>
                                <td><center>{{ $loop->iteration}}</center></td>
                                <td><center>{{ $item->nama}}</center></td>
                                <td><center>{{ $item->name}}</center></td>
                                <td><center>{{ $item->judul}}</center></td>
                                <td>
                                    <center>
                                        {{$item->status}}
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <div class="btn btn-group">
                                            <a href="{{ url('pengajuan', $item->id_pengajuan) }}" class="btn btn-sm btn-warning">
                                               <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{ url('pengajuan/delete', $item->id_pengajuan) }}" method="POST"  onclick="return confirm('Yakin ingin memperifikasi data ini ?!');">
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
