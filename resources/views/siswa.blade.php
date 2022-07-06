@extends('template')
@section('konten')
<div class="card mt-3 mb-3">
    <div class="card-header text-center">
        Data Siswa Baru
    </div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-plus-circle"></i> Tambah Data
        </button>
        <table class="table table-striped table-bordered table-hover mt-3 data">
            <thead>
                <tr  class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    {{-- <th>Usia</th> --}}
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php $no=1?>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td class="text-center">{{$no++}}</td>
                    <td>{{$d->nama}}</td>
                    {{-- <td  class="text-center">{{$d->usia}}</td> --}}
                    <td  class="text-center">{{$d->kontak->nomor_telepon}}</td>
                    <td>{{$d->alamat}}</td>
                    <td class="text-center">
                        <a href="/siswa/detail/{{$d->id}}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                        <a href="/siswa/edit/{{$d->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <a href="/siswa/delete/{{$d->id}}" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data?')"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col">
                {{-- {{$data->links()}} --}}
            </div>
            <div class="col">
                {{-- <b>Page : </b>   {{$data->currentPage()}} | {{$data->perPage()}} --}}

            </div>
            {{-- <div class="col">
                <a href="/getAll">Tampilkan semua</a>
            </div> --}}
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/input" method="post">
                {{csrf_field()}}
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" required>                  
                </div>
                <div class="mb-3">
                  <label class="form-label">Usia</label>
                  <input type="text" class="form-control" name="usia" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" required>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
    
@endsection