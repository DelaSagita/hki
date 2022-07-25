<x-app>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('sub_judul', 'Kepengurusan')

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
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset($asu-> image)}}"
                                        alt="User profile picture">
                                </div>

                                <h4 class="profile-username text-center">{{ $asu->name }}</h4>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>{{ $asu->jabatan }}</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>{{ $asu->nip }}</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>{{ $asu->content }}</b>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            {{-- <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Edit</a>
                                    </li>
                                </ul>
                            </div> --}}


                            <div class="card-header p-2">
                                <div class="col-sm-2 col-form-label">
                                    <button type="text" class="btn btn-success"><a href="{{ url('/direktur') }}">Kembali</a></button>
                                </div>
                            </div>

                                        <div class="card-body">

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nama Pengurus</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputName"
                                                        placeholder="Name" name="name">{{ $asu->name }}</a>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">NIP</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputEmail"
                                                        placeholder="NIP" name="nip">{{ $asu->nip }}</a>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputName2"
                                                        placeholder="Jabatan" name="jabatan" >{{ $asu->jabatan }}</a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Misi
                                                    Visi</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputName2"
                                                    placeholder="Jabatan" name="jabatan">{{ $asu->content }}</a>
                                                </div>
                                            </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</x-app>
