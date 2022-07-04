@extends('template')
@section('konten')
<div class="card mt-3 mb-3">
    <div class="card-header">
        Detail siswa
    </div>
    <div class="card-body">
        <a href="/siswa" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
        <table class="table table-bordered table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th class="text-center">Acttion</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->usia}}</td>
                    <td>{{$data->kontak->nomor_telepon}}</td>
                    <td>{{$data->kontak->email}}</td>
                    <td>{{$data->alamat}}</td>
                    <td class="text-center">
                        <a href="/siswa/edit/{{$data->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <a href="/siswa/delete/{{$data->id}}" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data?')"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection