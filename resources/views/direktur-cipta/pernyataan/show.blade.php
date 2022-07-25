<x-app>

@section('judul','Detail Hak Cipta')
@section('sub_judul','Pernyataan Hak Cipta')


    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    SURAT PERNYATAAN HAK CIPTA
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Ciptaan</dt>
                            <dd>{{ $pernyataan->berjudul }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>File pernyataan</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url($pernyataan->file) }}" class="btn btn-dark"> Download File pengalihan</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app>
