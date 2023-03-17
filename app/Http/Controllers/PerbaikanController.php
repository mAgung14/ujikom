<?php

namespace App\Http\Controllers;

use App\Models\kerusakan;
use App\Models\Mekanik;
use App\Models\perbaikan;
use Illuminate\Http\Request;

class PerbaikanController extends Controller
{
    function index(){
        $perbaikan['perbaikan'] = perbaikan::get();
        return view('perbaikan.perbaikan',$perbaikan);
    }

    function tambah(){
        $mekanik['mekanik'] = Mekanik::get();
        $kerusakan['kerusakan'] = kerusakan::get();
        $data = [
            'tanggal'=>'',
            'status_perbaikan'=>'',
            'status_permbayaran'=>'',
            'id_mekanik'=>'',
            'id_kerusakan'=>'',
            'action'=>url('/perbaikan/add')
        ];
        return view('perbaikan.perbaikanadd',$mekanik)->with($kerusakan);
    }
    function add(Request $req){
        // dd($req);
        perbaikan::create([
            'tanggal'=>$req->tanggal,
            'status_perbaikan'=>$req->status_perbaikan,
            // 'status_pembayaran'=>$req->status_pembayaran,
            'id_mekanik'=>$req->id_mekanik,
            'id_kerusakan'=>$req->id_kerusakan
        ]);
        return redirect('/perbaikan');
    }

    function edit(Request $req,$id){
        $edit = perbaikan::find($id);
        $data = [
            'tanggal'=>$edit->tanggal,
            'status_perbaikan'=>$edit->status_perbaikan,
            'status_pembayaran'=>$edit->status_pembayaran,
            'id_mekanik'=>$edit->id_mekanik,
            'id_kerusakan'=>$edit->id_kerusakan,
            'action'=>url('/perbaikan/update').'/'.$edit->id
        ];
        return view('perbaikan.perbaikanupdate',$data);
    }

    function update(Request $req){
        $data = [
            'tanggal'=>$req->tanggal,
            'status_perbaikan'=>$req->status_perbaikan,
            'status_pembayaran'=>$req->status_pembayaran,
        ];

        perbaikan::where('id',$req->id)->update($data);
        return redirect('/perbaikan');
    }

    function delete(Request $req){
        $delete = perbaikan::where('id', $req->id)->delete();
        if ($delete) {
            return redirect('/perbaikan')->with('pesan','<div class="alert alert-secondary" role="alert">
            perbaikan Berhasil Di hapus
          </div>');
        }else{
            return redirect('/perbaikan')->with('pesan','<div class="alert alert-secondary" role="alert">
            perbaikan Tidak bisa di hapus
          </div>');
        }
    }
}
