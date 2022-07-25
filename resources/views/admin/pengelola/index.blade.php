@extends('template_admin.home')
@section('judul','Kepengurusan Sentral HaKi')
@section('sub_judul','Struktur Kepengurusan')
@section('content')


<div class="card">
	<div class="container">
		<div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="col-6">
				<h5 class="card-header">Tabel Kepengurusan</h5>
			</div>
			<div class="col-6">
					<!-- Modal -->
				<button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
				  Tambah Kepengurusan
				</button>
			</div>
		</div>
	</div>


	<div class="card-body">
	<div class="table-responsive">
	<table class="table dataTable">
					<thead>
						<tr>
							<th><center> No </center></th>
							<th><center> Nama Pengurus </center></th>
							<th><center> Jabatan </center></th>
							<th><center> Action </center></th>
						</tr>
					</thead>

					<tbody>
						<?php $no=1; ?>
						@foreach ($pengelola as $result)

						<tr>
							<td> {{ $no++ }} </td>
							<td> {{$result-> name}} </td>
							<td> {{$result-> jabatan}} </td>
							<td><center>
        						<div class="btn btn-group">
          							<a href="{{ route('pengelola.show', $result->id) }}" class="btn btn-sm btn-warning">
            							<i class="fa fa-eye"></i>
          							</a>
          						<form action="{{ route('pengelola.destroy', $result->id) }}" method="post" onclick="return confirm('Apa anda yakin akan menghapus Data ini ?');">
              							@csrf
              							@method('delete')
              						<button type="submit" class="btn btn-sm btn-danger">
                						<i class="fa fa-trash"></i>
              						</button>
          						</form>
        						</div>
    						</td></center>

						</tr>
						@endforeach
					</tbody>

				</table>
			</div>
		</div>
	</div>
</div>


<!-- Tambah Pengelola -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="staticBackdropLabel">Tambah Kepengurusan</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">




						  <!-- ============================================================== -->
						  <!-- basic form  -->
						  <!-- ============================================================== -->
						  <div class="row">
							  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<form action="{{ route('pengelola.store') }}" method="post" enctype="multipart/form-data">
									@csrf
											  <div class="form-group">
												  <label for="inputText3" class="col-form-label">Nama Pengurus</label>
												  <input id="inputText3" type="text" class="form-control" placeholder="Nama" name="name">
											  </div>

											  <div class="form-group">
												<label for="inputText3" class="col-form-label">NIP</label>
												<input id="inputText3" type="text" class="form-control" placeholder="NIP" name="nip">
											  </div>

											  <div class="form-group">
												<label for="inputText3" class="col-form-label">Jabatan</label>
												<input id="inputText3" type="text" class="form-control" placeholder="Jabatan" name="jabatan">
											  </div>

											  <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Misi Visi</label>
                                                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Pengertian Kategori"></textarea>
                                              </div>

											  <div class="form-group">
												<label for="inputText3" class="col-form-label">Profil</label>
											  	<input type="file" name="image" id="" class="form-control">
											  </div>

											  <div class="modal-footer">
												  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												  <button class="btn btn-primary">Simpan</button>
											  </div>
										  </form>

							  </div>
						  </div>
						  <!-- ============================================================== -->
						  <!-- end basic form  -->
						  <!-- ============================================================== -->

		</div>

	  </div>
	</div>
  </div>





@endsection
