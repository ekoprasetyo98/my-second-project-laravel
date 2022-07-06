@extends('template')
@section('konten')
    <div class="card mt-3 mb-3">
        <div class="card-header">
            Edit Data Siswa
          </div>
          <div class="card-body">
            <form action="/update/{{$data->id}}" method="post">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>                  
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Usia</label>
                  <input type="text" class="form-control" name="usia" value="{{$data->usia}}" required>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" value="{{$data->kontak->email}}" required>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">No Telp</label>
                  <input type="text" class="form-control" name="no_telp" value="{{$data->kontak->nomor_telepon}}" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}" required>
                </div>
                
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin mengubah data ini?')"><i class="bi bi-cloud-download"></i> Simpan</button>
                <a href="/siswa" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                
            </form>
        </div>
    </div>
@endsection
