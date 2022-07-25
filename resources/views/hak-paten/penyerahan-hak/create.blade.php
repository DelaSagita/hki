<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Hak Paten')
    @section('judul3', 'Penyerahan Hak Paten')


    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3">
                <div class="card-header">
                    PENYERAHAN HAK PATEN
                </div>
                <div class="card-body">
                    <form action="{{ url('hak-paten/penyerahan-hak') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Yang bertanda tanggan di bawah ini</label>
                                    <input type="text" name="bertanda"
                                        class="form-control  @error('bertanda') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Yang menyerahkan</label>
                                    <input type="text" name="menyerahkan"
                                        class="form-control  @error('menyerahkan') is-invalid @enderror">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Judul Ciptaan</label>
                                    <textarea name="judul" id="" cols="30" rows="10"
                                        class="form-control  @error('judul') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                        name="tanggal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama penemu</label>
                                    <input type="text" class="form-control  @error('penemu') is-invalid @enderror"
                                        name="penemu">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">File NPWP</label>
                                    <input class="form-control  @error('file_npwp') is-invalid @enderror" type="file"
                                        id="formFile" name="file_npwp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">FILE KTP</label>
                                    <input class="form-control  @error('file_ktp') is-invalid @enderror" type="file"
                                        id="formFile" name="file_ktp">
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
