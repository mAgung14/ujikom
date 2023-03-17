<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use App\Models\Member;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    function ambil(){
        $mekanik['mekanik'] = Mekanik::get();
        $mekanik['permintaan'] = Mekanik::where('status_aktivasi','0')->get();
        return view('mekanik.mekanik',$mekanik);
    }

    function tambah(){
        $member['member'] = Member::get();
        $data = [
            'name'=>'',
            'alamat'=>'',
            'status_aktivasi'=>'',
            'member_id'=>'',
            'tombol'=>'Simpan',
            'action'=> url('/mekanik/add')
        ];
        return view('mekanik.mekanikadd',$data,$member);
    }
    function add(Request $req){
        // return $req;
        $data = [
            'name'=>$req->name,
            'alamat'=>$req->alamat,
            'status_aktivasi'=>'0',
            'member_id'=>$req->member_id,
        ];
        Mekanik::create($data);
        return redirect('/member');
    }

    function edit($id){
        $edit = Mekanik::select('status_aktivasi')->where('id',$id)->first();
        $update = $edit->status_aktivasi;
        if ($update == 0) {
            Mekanik::where('id',$id)->update(['status_aktivasi'=>'1']);
        }
        return redirect('/mekanik');
    }

    function delete(Request $req){
        $delete = Mekanik::where('id', $req->id)->delete();
        if ($delete) {
            return redirect('/')->with('pesan','<div class="alert alert-secondary" role="alert">
            Mekanik Berhasil Di hapus
          </div>');
        }else{
            return redirect('')->with('pesan','<div class="alert alert-secondary" role="alert">
            Mekanik Tidak bisa di hapus
          </div>');
        }
    }

}
