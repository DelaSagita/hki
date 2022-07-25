<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Hak Paten')
    @section('judul3', 'Pernyataan Kepemilikan')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    PERNYATAAN KEPEMILIKAN PATEN
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Ciptaan</dt>
                            <dd>{{ $pemilik->judul }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>File Hak KEPEMILIKAN</th>
                                    <th>List TTD</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url($pemilik->file) }}" class="btn btn-dark"> Download File
                                            kepemilikan</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($pemilik->file_list) }}" target="_blank" class="btn btn-dark">
                                            Download List ttd</a>
                                    </td>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-dosen>
