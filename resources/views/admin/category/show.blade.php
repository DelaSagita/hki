@extends('template_admin.home')
@section('judul','SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
@section('sub_judul','Detail Kategori')
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
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset($category-> image)}}"
                                    alt="User profile picture">
                            </div>

                            <h4 class="profile-username text-center">{{ $category->name }}</h4>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>{{ $category->category }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ $category->content }}</b>
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
                                    <form action="{{ route('category.update', $category->id) }}"
                                        class="form-horizontal" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama Kategori</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Nama" name="name" value="{{ $category->name }}">
                                                @error('name')
                                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                            <select name="category" class="form-control" id="exampleFormControlSelect1" >
                                                @error('category')
                                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                                <option>{{ $category->category }}</option>
                                                <option>Paten</option>
                                                <option>Paten Sederhana</option>
                                                <option>Hak Cipta</option>
                                                <option>Merek</option>
                                                <option>Artikel</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Pengertian</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputName1" placeholder="Content"
                                                    name="content">{{ $category->content }}</textarea>
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
                                                <button type="button" class="btn btn-success"><a href="/category">Kembali</a></button>
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
