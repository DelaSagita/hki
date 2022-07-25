@extends('template_admin.home')
@section('judul','Akun')
@section('sub_judul','Edit Profil')
@section('content')


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>PROFIL</h3>
            </div>
            <div class="card-body">
                <table class="table">
                        <tr>
                            <td colspan="3" class="text-center">
                                <img src="{{ asset( Auth::user()->image ) }}" alt="" style="width: 100px !important;height:100px !important;border-radius:20px">
                            </td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ Auth::user()->name  }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ Auth::user()->email  }}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>:</td>
                            <td>
                                <input type="password" value="{{ Auth::user()->password  }}" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#update">UPDATE AKUN</button>
                            </td>
                        </tr>

                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ url('admin/profil')}}" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPDATE AKUN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name  }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email  }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Password baru</label>
                        <input type="password" name="new" class="form-control @error('new') is-invalid @enderror" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Profil</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ asset( Auth::user()->image ) }}" >
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection
