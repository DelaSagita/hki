<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Hak Cipta')
    @section('judul3', 'Pendaftaran')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Pengajuan permohonan hak cipta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Ciptaan</dt>
                            <dd>{{ $hakcipta->jenis_judul_pencipta }}</dd>
                        </div>
                        <div class="col">
                            <dt>Tempat pencipta</dt>
                            <dd>{{ $hakcipta->tempat_pencipta }}</dd>
                        </div>
                        <div class="col">
                            <dt>Tanggal pembuatan pencipta</dt>
                            <dd>{{ $hakcipta->tanngal_pembuatan_pencipta }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>File Hak cipta</th>
                                    <th>NPWP</th>
                                    <th>KTP</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url($hakcipta->file_permohonan_hakcipta) }}" class="btn btn-dark"> Download File Hak cipta</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($hakcipta->file_npwp) }}" target="_blank" class="btn btn-dark"> Download NPWP</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($hakcipta->file_ktp) }}" target="_blank" class="btn btn-dark"> Download KTP</a>
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
