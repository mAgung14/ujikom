<?php

namespace App\Http\Controllers;

use App\Models\jeniskerusakan;
use Illuminate\Http\Request;

class JenisKerusakanController extends Controller
{
    function index(){
        $jenis_kerusakan['jenis_kerusakan'] = jeniskerusakan::get();
        return view('jeniskerusakan.jenis',$jenis_kerusakan);
    }

    function tambah(){
        $data = [
            'jeniskerusakan' => '',
            'deskripsi' => '',
            'action' => url('/jeniskerusakan/add'),
            'tombol' => 'Simpan'
        ];
        return view('jeniskerusakan.jenisadd',$data);
    }

    function add(Request $req){
        $data = [
            'jeniskerusakan' => $req->jeniskerusakan,
            'deskripsi' => $req->deskripsi
        ];
        jeniskerusakan::create($data);
        return redirect('/jeniskerusakan');
    }
}
