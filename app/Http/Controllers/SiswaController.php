<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;


class SiswaController extends Controller
{
    //
    public function getData(){
        $data =Siswa::all(); #if use query builder $data = DB::table('table_name')->get();
        return view('siswa',['data'=>$data]);
    }

    

    public function input(Request $request){
        // if use query builder DB::table('table_name')->insert(['column' => $request->name ]);
    Siswa::create([
            'nama'=>$request->nama,
            'usia'=>$request->usia,
            'alamat'=>$request->alamat

        ]);
        return redirect('/siswa');
    }

    public function getById($id){
        // if use query builder $data = DB::table('table_name')->where('id',$id)->get();
        $data =Siswa::find($id);
        return view('detail',['data'=>$data]);
    }

    public function delete($id){
        // if use query builder DB::table('table_name')->where('id',$id)->delete();
    Siswa::find($id)->delete();
        return redirect('/siswa');
    }

    public function edit($id){
        // if use query builder $data = DB::table('table_name')->where('id',$id)->get();
        $data =Siswa::find($id);
        return view('edit',['data'=>$data]);
    }

    public function update($id, Request $request){
        // if use query builder DB::table('tableName')->where('id',$request->id)->update(['column' => $request->name]);
        $data =Siswa::find($id);
        $data->nama = $request->nama;
        $data->usia = $request->usia;
        $data->kontak->email = $request->email;
        $data->kontak->nomor_telepon = $request->no_telp;
        $data->alamat = $request->alamat;
        $data->save();
        return view('detail',['data'=>$data]);
    }

    
}
