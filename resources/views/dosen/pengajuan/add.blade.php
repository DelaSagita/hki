@extends('layout.basepegawai')
@section('content')


<form action="{{url('pegawai/pengajuan/add')}} " method="POST" >
    @csrf
    <input type="hidden" name="id_pegawai" value="{{ auth('pegawai')->user()->id }}">
<div class="card"> 
    <div class="card-body">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama Kategori</label>
                    <select name="id_kategori" id="" class="form-control">
                        <option value=""> --- Pilih Kategori ---</option>
                        @foreach ($list_kategori as $kategori)
                            <option value="{{  $kategori->id }}">{{  $kategori->nama_kategori }}</option>

                        @endforeach
                    </select>
                  
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Judul</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Judul yang diajukan" name="judul">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Keterangan</label>
                    <textarea name="keterangan" id="editor" cols="15" rows="5" class="form-control" ></textarea>
                </div>
            </div>

           
        </div>

        
    </div>
    <div class="card-footer text-right">
        <a href="{{ url('pegawai/pengajuan')  }}" class="btn btn-secondary">BATAL</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    

</div>
</form>
@endsection