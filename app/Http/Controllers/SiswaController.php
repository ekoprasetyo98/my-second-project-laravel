<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;


class SiswaController extends Controller
{
    //
    public function getData(){
        $data =Siswa::simplePaginate(10);
        return view('siswa',['data'=>$data]);
    }

    public function getAllData(){
        $data =Siswa::simplePaginate(100);
        return view('siswa',['data'=>$data]);
    }

    public function input(Request $request){
    Siswa::create([
            'nama'=>$request->nama,
            'usia'=>$request->usia,
            'alamat'=>$request->alamat

        ]);
        return redirect('/siswa');
    }

    public function getById($id){
        $data =Siswa::find($id);
        // dd($data);
        return view('detail',['data'=>$data]);
    }

    public function delete($id){
    Siswa::find($id)->delete();
        return redirect('/siswa');
    }

    public function edit($id){
        $data =Siswa::find($id);
        return view('edit',['data'=>$data]);
    }

    public function update($id, Request $request){
        $data =Siswa::find($id);
        $data->nama = $request->nama;
        $data->usia = $request->usia;
        $data->alamat = $request->alamat;
        $data->save();
        return view('detail',['data'=>$data]);
    }

    
}
