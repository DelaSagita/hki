<x-dosen>
      
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
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset($tampil-> image)}}"
                                        alt="User profile picture">
                                </div>
    
                                <h4 class="profile-username text-center">{{ $tampil->name }}</h4>
    
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>{{ $tampil->jabatan }}</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>{{ $tampil->nip }}</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>{{ $tampil->content }}</b>
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
                            {{-- <div class="card-header p-2">
                                <ul class="nav nav-pills">                               
                                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Edit</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <!-- /.card-header -->


                            <div class="card-header p-2">
                                <div class="col-sm-2 col-form-label">
                                    <button type="text" class="btn btn-success"><a href="{{ url('/dosen') }}">Kembali</a></button>
                                </div>
                            </div>
    
                                        <div class="card-body">
                                     
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nama Pengurus</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputName"
                                                        placeholder="Name" name="name">{{ $tampil->name }}</a>
                                                    {{-- @error('name')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">NIP</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputEmail"
                                                        placeholder="NIP" name="nip">{{ $tampil->nip }}</a>
                                                        {{-- @error('nip')
                                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputName2"
                                                        placeholder="Jabatan" name="jabatan" >{{ $tampil->jabatan }}</a>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Misi
                                                    Visi</label>
                                                <div class="col-sm-10">
                                                    <a type="text" class="form-control" id="inputName2"
                                                    placeholder="Jabatan" name="jabatan">{{ $tampil->content }}</a>
                                                </div>
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
    
    
</x-dosen>
