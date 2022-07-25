@extends('template_admin.home')
@section('judul','Kepengurusan')
@section('sub_judul','Detail dan Edit')
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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img alt="User Avatar" class="rounded-circle user-avatar-xxl"
                                src="{{ asset($pengelola-> image)}}">
                            </div>

                            <h4 class="profile-username text-center">{{ $pengelola->name }}</h4>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>{{ $pengelola->jabatan }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ $pengelola->nip }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ $pengelola->content }}</b>
                                </li>
                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">

                        <div class="card-body">


                                <div class="tab-pane" id="settings">
                                    <form action="{{ route('pengelola.update', $pengelola->id) }}"
                                        class="form-horizontal" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama Pengurus</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Name" name="name" value="{{ $pengelola->name }}">
                                                @error('name')
                                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail"
                                                    placeholder="NIP" name="nip" value="{{ $pengelola->nip }}">
                                                    @error('nip')
                                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2"
                                                    placeholder="Jabatan" name="jabatan"
                                                    value="{{ $pengelola->jabatan }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Misi
                                                Visi</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputName1" placeholder="Content"
                                                    name="content" value="{{ $pengelola->content }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Profil</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="" name="image">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Simpan</button>
                                                <button type="button" class="btn btn-success"><a href="/pengelola">Kembali</a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->



                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>






@endsection
