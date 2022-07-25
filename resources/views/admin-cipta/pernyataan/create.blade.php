@extends('template_admin.home')
@section('judul','Pernyataan Hak Cipta')
@section('sub_judul','Buat Pernyataan')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3">
                <div class="card-header">
                    Pengajuan permohonan hak cipta
                </div>
                <div class="card-body">
                    <form action="{{ url('admin-cipta/pernyataan-hak-cipta') }}" method="post">
                        @csrf
                        <h5>Yang Bertanda Tangan Di bawah ini :</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kewarganegaraan</label>
                                    <input type="text"
                                        class="form-control @error('kewarganegara') is-invalid @enderror"
                                        name="kewarganegara">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <br>
                        <h5>Dengan ini menyatakan bahwa :</h5>
                        <ul class="list-unstyled">
                            <li>Karya cipta yang saya mohonkan:
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">berupa</label>
                                            <input type="text"
                                                class="form-control @error('berupa') is-invalid @enderror"
                                                name="berupa">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">berjudul</label>
                                            <input type="text"
                                                class="form-control @error('berjudul') is-invalid @enderror"
                                                name="berjudul">
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>Tidak meniru dan tidak sama secara esensial dengan Karya Cipta milik pihak lain
                                        atau obyek kekayaan intelektual lainnya sebagaimana dimaksud dalam Pasal 68 ayat
                                        (2);</li>
                                    <li>Bukan merupakan Ekspresi Budaya Tradisional sebagaimana dimaksud dalam Pasal 38
                                        ;</li>
                                    <li>Bukan merupakan Ciptaan yang tidak diketahui penciptanya sebagaimana dimaksud
                                        dalam Pasal 39;</li>
                                    <li>Bukan merupakan hasil karya yang tidak dilindungi Hak Cipta sebagaimana dimaksud
                                        dalam Pasal 41 dan 42;</li>
                                    <li>Bukan merupakan Ciptaan seni lukis yang berupa logo atau tanda pembeda yang
                                        digunakan sebagai merek dalam perdagangan barang/jasa atau digunakan sebagai
                                        lambang organisasi, badan usaha, atau badan hukum sebagaimana dimaksud dalam
                                        Pasal 65 dan;</li>
                                    <li>Bukan merupakan Ciptaan yang melanggar norma agama, norma susila, ketertiban
                                        umum, pertahanan dan keamanan negara atau melanggar peraturan perundang-undangan
                                        sebagaimana dimaksud dalam Pasal 74 ayat (1) huruf d Undang-Undang Nomor 28
                                        Tahun 2014 tentang Hak Cipta.</li>
                                </ul>
                            </li>
                            <li>
                                Sebagai pemohon mempunyai kewajiban untuk menyimpan asli contoh ciptaan yang
                                dimohonkan dan harus memberikan apabila dibutuhkan untuk kepentingan penyelesaian
                                sengketa perdata maupun pidana sesuai dengan ketentuan perundang-undangan.
                            </li>
                            <li>
                                Karya Cipta yang saya mohonkan pada Angka 1 tersebut di atas tidak pernah dan tidak
                                sedang dalam sengketa pidana dan/atau perdata di Pengadilan.
                            </li>
                            <li>
                                Dalam hal ketentuan sebagaimana dimaksud dalam Angka 1 dan Angka 3 tersebut di atas saya
                                / kami langgar, maka saya / kami bersedia secara sukarela bahwa :
                                <ul>
                                    <li>Permohonan karya cipta yang saya ajukan dianggap ditarik kembali;
                                        Karya Cipta yang telah terdaftar dalam Daftar Umum Ciptaan Direktorat Hak Cipta,
                                        Direktorat Jenderal Hak Kekayaan Intelektual, Kementerian Hukum Dan Hak Asasi
                                        Manusia R.I dihapuskan sesuai dengan ketentuan perundang-undangan yang berlaku.
                                    </li>
                                    <li>
                                        alam hal kepemilikan Hak Cipta yang dimohonkan secara elektronik sedang dalam
                                        berperkara dan/atau sedang dalam gugatan di Pengadilan maka status kepemilikan
                                        surat pencatatan elektronik tersebut ditangguhkan menunggu putusan Pengadilan
                                        yang berkekuatan hukum tetap.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Demikian Surat pernyataan ini saya / kami buat dengan sebenarnya dan untuk dipergunakan
                                sebagimana mestinya.
                            </li>
                        </ul>

                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">tempat</label>
                                    <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                                        name="tempat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">tanggal</label>
                                    <input type="date"
                                        class="form-control @error('tanngal') is-invalid @enderror"
                                        name="tanngal">
                                </div>
                            </div>
                        </div>


                        <button class="btn btn-dark float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
