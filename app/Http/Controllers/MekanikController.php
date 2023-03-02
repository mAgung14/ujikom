<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use App\Models\Member;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    function ambil(){
        $mekanik['mekanik'] = Mekanik::get();
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
            'status_aktivasi'=>$req->status_aktivasi,
            'member_id'=>'1',
        ];
        Mekanik::create($data);
        return redirect('/member');
    }

    function edit(Request $req){
        $edit = Mekanik::find($req->id);
        $member['member'] = Member::get();
        $data = [
            'name'=>$edit->name,
            'alamat'=>$edit->alamat,
            'status_aktivasi'=>$edit->status_aktivasi,
            'member_id'=>'1',
            'action'=>url('mekanik/update').'/'.$edit->id
        ];
        return view('mekanik.mekanikadd',$data,$member);
    }

    function update(Request $req){
        $data = [
            'name'=>$req->name,
            'alamat'=>$req->alamat,
            'status_aktivasi'=>$req->status_aktivasi,
            'member_id'=>'1',
        ];
        Mekanik::where('id',$req->id)->update($data);
        return redirect('/mekanik');
    }
}
