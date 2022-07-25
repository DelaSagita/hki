<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Pendaftaran')
    @section('judul3', 'Hak cipta')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3">
                <div class="card-header">
                    PENGAJUAN HAK CIPTA
                </div>
                <div class="card-body">
                    <form action="{{ url('hak-cipta/pendaftaran-ciptaan') }}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <h4>Pencipta</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text"
                                        class="form-control @error('nama_pencipta') is-invalid @enderror"
                                        name="nama_pencipta">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kewarganegaraan</label>
                                    <input type="text"
                                        class="form-control @error('Kewarganegaran_pencipta') is-invalid @enderror"
                                        name="Kewarganegaran_pencipta">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">No Hp</label>
                                    <input type="number"
                                        class="form-control @error('no_hp_pencipta') is-invalid @enderror"
                                        name="no_hp_pencipta">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text"
                                        class="form-control @error('email_pencipta') is-invalid @enderror"
                                        name="email_pencipta">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('alamat_pencipta') is-invalid @enderror" name="alamat_pencipta"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <h4>Pemegang hak cipta</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text"
                                        class="form-control @error('nama_pemegang') is-invalid @enderror"
                                        name="nama_pemegang" value="Politeknik Negri Ketapang" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kewarganegaraan</label>
                                    <input type="text"
                                        class="form-control @error('Kewarganegaraan_pemegang') is-invalid @enderror"
                                        name="Kewarganegaraan_pemegang" value="Indonesia" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">No Hp</label>
                                    <input type="number"
                                        class="form-control @error('no_hp_pemegang') is-invalid @enderror"
                                        name="no_hp_pemegang" readonly value="082250867886">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email"
                                        class="form-control @error('email_pemegang') is-invalid @enderror"
                                        name="email_pemegang" value="sentraki@politap.ac.id" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea readonly class="form-control @error('alamat_pemegang') is-invalid @enderror" name="alamat_pemegang"
                                        id="exampleFormControlTextarea1" rows="3">Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112</textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Jenis Dari Judul
                                        Ciptaan</label>
                                    <textarea class="form-control @error('jenis_judul_pencipta') is-invalid @enderror" name="jenis_judul_pencipta"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tempat Pertama kali di
                                                umumkan</label>
                                            <input type="text"
                                                class="form-control @error('tempat_pencipta') is-invalid @enderror"
                                                name="tempat_pencipta">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tanggal Pertama kali di
                                                umumkan</label>
                                            <input type="date"
                                                class="form-control @error('tanngal_pertama_kali_pencipta') is-invalid @enderror"
                                                name="tanngal_pertama_kali_pencipta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Uraian Ciptaan</label>
                                    <textarea class="form-control @error('uraian_pencipta') is-invalid @enderror" name="uraian_pencipta"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Pembuatan Formulir</label>
                                    <input type="date"
                                        class="form-control @error('tanngal_pembuatan_pencipta') is-invalid @enderror"
                                        name="tanngal_pembuatan_pencipta">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">File NPWP</label>
                                    <input class="form-control  @error('file_npwp') is-invalid @enderror" type="file" id="formFile" name="file_npwp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">FILE KTP</label>
                                    <input class="form-control  @error('file_ktp') is-invalid @enderror" type="file" id="formFile" name="file_ktp">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-dosen>
