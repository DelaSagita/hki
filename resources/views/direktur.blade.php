<x-app>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $merek }}</h3>
                  <p>Merek</p>
                </div>
                <div class="icon">
                  <i class="fas fa-edit"></i>
                </div>
                <a href="{{ url('direktur/merek') }}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $hakcipta }}</h3>
                  <p>Hak Cipta</p>
                </div>
                <div class="icon">
                  <i class="fab fa-fw fa-wpforms"></i>
                </div>
                <a href="{{ url('direktur-permohonan') }}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $kepemilikan }}</h3>
                  <p>Paten</p>
                </div>
                <div class="icon">
                  <i class="fas fa-file"></i>
                </div>
                <a href="{{ url('direktur-paten/penyerahan-hak') }}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $pegawai }}</h3>
                  <p>Pegawai</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="{{ url('direktur/pegawai') }}" class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
    </div>
</section>


<div class="row justify-content-center">
    <div class="col-md-11">


<section class="content">
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pengurus Sentra HaKI</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengurus</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($asu as $result)

                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{$result-> name}}</td>
                      <td>{{$result-> jabatan}}</td>
                      <td>
                        <a href="{{ route('pengurus.show', $result->id) }}"
                          class="btn btn-sm btn-success" ><i class="fas fa-eye "></i></a>

                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

    </div>
</div>

</x-app>
