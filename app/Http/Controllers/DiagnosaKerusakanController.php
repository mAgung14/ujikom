<?php

namespace App\Http\Controllers;

use App\Models\diagnosakerusakan;
use App\Models\jeniskerusakan;
use App\Models\kerusakan;
use Illuminate\Http\Request;

class DiagnosaKerusakanController extends Controller
{
    function index(){
        $diagnosakerusakan= diagnosakerusakan::with(['jenis','kerusakan'])->get();
        // return json_encode($diagnosakerusakan);
        return view('diagnosa.diagnosa',compact('diagnosakerusakan'));
    }
    function tambah(){
        $jeniskerusakan = jeniskerusakan::get();
        $kerusakan = kerusakan::with('member')->get();
        $data = [
            'id_jeniskerusakan' => '',
            'id_kerusakan' => '',
            'keterangan' => '',

        ];
        return view('diagnosa.diagnosaadd',compact('data','jeniskerusakan','kerusakan'));
    }

    function add(Request $req){
        // dd($req);
        $data = [
            'id_jeniskerusakan'=>$req->id_jeniskerusakan,
            'id_kerusakan'=>$req->id_kerusakan,
            'keterangan'=>$req->keterangan
        ];
        diagnosakerusakan::create($data);
        return redirect('/Diagnosa');
    }
}
