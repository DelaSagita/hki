<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Hak Paten')
    @section('judul3', 'Penyerahan Hak Paten')


    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    PENYERAHAN HAK PATEN
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Ciptaan</dt>
                            <dd>{{ $paten->judul }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>File Hak Penyerahan</th>
                                    <th>NPWP</th>
                                    <th>KTP</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url($paten->file) }}" class="btn btn-dark"> Download File penyerahan</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($paten->file_npwp) }}" target="_blank" class="btn btn-dark"> Download NPWP</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($paten->file_ktp) }}" target="_blank" class="btn btn-dark"> Download KTP</a>
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
