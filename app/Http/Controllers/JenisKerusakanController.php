<?php

namespace App\Http\Controllers;

use App\Models\jeniskerusakan;
use Illuminate\Http\Request;

class   JenisKerusakanController extends Controller
{
    function index(){
        $jenis_kerusakan['jenis_kerusakan'] = jeniskerusakan::get();
        return view('jeniskerusakan.jenis',$jenis_kerusakan);
    }

    function tambah(){
        $data = [
            'jenisKerusakan' => '',
            'deskripsi' => '',
            'action' => url('/jeniskerusakan/add'),
            'tombol' => 'Simpan'
        ];
        return view('jeniskerusakan.jenisadd',$data);
    }

    function add(Request $req){
        $data = [
            'jenisKerusakan' => $req->jenisKerusakan,
            'deskripsi' => $req->deskripsi
        ];
        jeniskerusakan::create($data);
        return redirect('/jeniskerusakan');
    }

    function edit(Request $req,$id){
        $edit = jeniskerusakan::find($id);
        $data = [
            'jenisKerusakan'=>$edit->jenisKerusakan,
            'deskripsi'=>$edit->deskripsi,
            'action'=> url('/jeniskerusakan/update').'/'.$edit->id
        ];


        return view('jeniskerusakan.jenisadd',$data);
    }
    function update(Request $req){
        $data = [
            'jeniskerusakan'=>$req->jeniskerusakan,
            'deskripsi'=>$req->deskripsi,
        ];

        jeniskerusakan::where('id',$req->id)->update($data);
        return redirect('/jeniskerusakan');
    }
    function delete(Request $req){
        $delete = jeniskerusakan::where('id', $req->id)->delete();
        if ($delete) {
            return redirect('/kerusakan')->with('pesan','<div class="alert alert-secondary" role="alert">
            kerusakan Berhasil Di hapus
          </div>');
        }else{
            return redirect('/kerusakan')->with('pesan','<div class="alert alert-secondary" role="alert">
            kerusakan Tidak bisa di hapus
          </div>');
        }
    }
}
