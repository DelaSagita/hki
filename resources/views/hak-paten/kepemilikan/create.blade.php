<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Hak Paten')
    @section('judul3', 'Pernyataan Kepemilikan')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3">
                <div class="card-header">
                    PERNYATAAN KEPEMILIKAN
                </div>
                <div class="card-body">
                    <form action="{{ url('hak-paten/pernyataan-kepemilikan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Judul Ciptaan</label>
                                    <input type="text" name="judul"
                                        class="form-control @error('judul') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Invetor</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">

                                    <label for="" class="form-label">File List Nama Invetor</label>
                                    <input class="form-control  @error('file_list') is-invalid @enderror" type="file"
                                        id="formFile" name="file_list">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-dosen>
