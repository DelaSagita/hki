<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Hak Cipta')
    @section('judul3', 'Pengalihan Hak')



    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3">
                <div class="card-header">
                    PENGALIHAN HAK CIPTA
                </div>
                <div class="card-body">
                    <form action="{{ url('hak-cipta/pengalihan-hak-cipta') }}" method="post">
                        @csrf
                       
                        <h4>Yang Bertanda Tangan Di bawah ini</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        name="nama">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Adalah Pihak I selaku pencipta, dengan ini menyerahkan karya ciptaan saya kepada :</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text"
                                        class="form-control @error('nama_pelaku') is-invalid @enderror"
                                        name="nama_pelaku">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('alamat_pelaku') is-invalid @enderror" name="alamat_pelaku"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <p>
                                        Adalah Pihak II selaku Pemegang Hak Cipta berupa <br/>
                                        <input type="text"
                                        class="form-control @error('judul') is-invalid @enderror"
                                        name="judul"> untuk didaftarkan di
                                        Direktorat Hak Cipta, Desain Industri, Desain Tata Letak dan Sirkuit Terpadu dan
                                        Rahasia Dagang, Direktorat Jenderal Hak Kekayaan Intelektual, Kementerian Hukum dan
                                        Hak Azasi Manusia R.I.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tempat </label>
                                    <input type="text"
                                        class="form-control @error('tempat') is-invalid @enderror"
                                        name="tempat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal</label>
                                    <input type="date"
                                        class="form-control @error('tanggal') is-invalid @enderror"
                                        name="tanggal">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Pemegang Hak cipta </label>
                                    <input type="text"
                                        class="form-control @error('nama_pencipta') is-invalid @enderror"
                                    value="Endang Kusmana SE,MM,Ak,CA" readonly name="pemegang">
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
