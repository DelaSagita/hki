@extends('template_admin.home')
@section('judul','Pengajuan')
@section('sub_judul','Tambah Data Pengajuan')
@section('content')

@if(count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<form action="{{url('pengajuan/add')}} " method="POST" enctype="multipart/form-data" >
    @csrf
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama Kategory</label>
                    <select name="id_category" id="" class="form-control">
                        <option value=""> --- Pilih Kategori ---</option>
                        @foreach ($list_category as $category)
                            <option value="{{  $category->id }}">{{  $category->name }}</option>

                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama Pegawai</label>
                    <select name="id_pegawai" id="" class="form-control">
                        <option value=""> --- Pilih Pegawai ---</option>
                        @foreach ($list_pegawai as $pegawai)
                            <option value="{{  $pegawai->id }}">{{  $pegawai->nama }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Judul</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Judul yang diajukan" name="judul">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Keterangan</label>
                    <textarea name="keterangan" id="" cols="15" rows="5" class="form-control" ></textarea>
                </div>
            </div>


        </div>


    </div>
    <div class="card-footer text-right">
        <a href="{{ url('admin/pengajuan')  }}" class="btn btn-secondary">BATAL</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>


</div>
</form>
@endsection
