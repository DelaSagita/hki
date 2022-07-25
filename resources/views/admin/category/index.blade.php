@extends('template_admin.home')
@section('judul','Kategori')
@section('sub_judul','Kategori Pengajuan')
@section('content')



<div class="card">
<div class="container">
	<div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="col-6">
    		<h5 class="card-header">Tabel Kategori</h5>
    </div>
	    <div class="col-6">
	    		<!-- Modal -->
			<button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			  Tambah Kategori
			</button>
	    </div>
	</div>
</div>



<div class="card-body">
  <table class="table dataTable">
  <thead>
		<tr>
			<th><center> No </center></th>
			<th><center> Nama </center></th>
			<th><center> Kategori </center></th>
            <th><center> Pengertian </center></th>
			<th><center> Action </center></th>
		</tr>
  </thead>

<tbody>
	<?php $no=1; ?>
	@foreach ($category as $result => $hasil)

	<tr>
		<td> {{ $result + $category->firstitem() }} </td>
		<td> {{$hasil-> name}} </td>
		<td> {{$hasil-> category}} </td>
        <td> {{$hasil-> content}} </td>
    <td><center>
        <div class="btn btn-group">
          <a href="{{ route('category.show', $hasil->id) }}" class="btn btn-sm btn-warning">
            <i class="fa fa-eye"></i>
          </a>
          <form action="{{ route('category.destroy', $hasil->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
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



<!-- Modal Tambah Kategori -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      					        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama</label>
                                                <input id="inputText3" type="text" class="form-control" placeholder="Nama Kategori" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Kategori</label>
                                                <select name="category" class="form-control" id="exampleFormControlSelect1">
                                                    <option value="">Paten</option>
                                                    <option>Paten Sederhana</option>
                                                    <option>Hak Cipta</option>
                                                    <option>Merek</option>
                                                    <option>Artikel</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputText3" class="col-form-label">Gambar</label>
                                              <input type="file" name="image" id="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Pengertian</label>
                                                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Pengertian Kategori"></textarea>
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
