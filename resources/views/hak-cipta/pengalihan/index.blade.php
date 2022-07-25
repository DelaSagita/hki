<x-dosen>

    @section('judul', 'SIHAKI | Sistem Informasi Hak Kekayaan Intelektual')
    @section('judul2', 'Hak Cipta')
    @section('judul3', 'Pengalihan Hak')



<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">PENGALIHAN HAK CIPTA </h6>
            <a href="{{ url('pengalihan-hak-cipta/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Permohonan</a>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Ciptaan</th>
                    <th>Action</th>
                </tr>
              </thead>



               <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($list_pengalihan as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>
                            <a href="{{ url('hak-paten/penyerahan-hak', $item->id) }}"
                                class="btn btn-info"><i class="fa fa-eye"></i> Lihat Pengalihan</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>


              {{-- <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($list_pengalihan as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>
                            <a href="{{ url('hak-cipta/pengalihan-hak-cipta', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Lihat Pengalihan</a>
                        </td>
                    </tr>
                @endforeach
              </tbody> --}}
            </table>
          </div>
        </div>
    </div>
</div>


</x-dosen>
