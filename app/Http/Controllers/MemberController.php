<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function oi(){
        $member['member'] = Member::get();
        return view('member.member',$member);
    }

    function tambah(){
        $user['users'] = User::get();
        $data = [
            'name'=>'',
            'no_hp'=>'',
            'email'=>'',
            'nik'=>'',
            'foto'=>'',
            'ktp'=>'',
            'alamat'=>'',
            'users_id'=>'',
            'action'=> url('/member/add')
        ];
        return view('member.memberadd',$data,$user);
    }

    function add(Request $req){
        if ($req->hasfile('foto')) {
            $foto = $req->file('foto')->store('img');
       }else{
           $foto = "";
       }

        if ($req->hasfile('ktp')) {
            $ktp = $req->file('ktp')->store('img');
       }else{
           $ktp = "";
       }

        $data = [
            'name'=>$req->name,
            'no_hp'=>$req->no_hp,
            'email'=>$req->email,
            'nik'=>$req->nik,
            'foto'=>$foto,
            'ktp'=>$ktp,
            'alamat'=>$req->alamat,
            'users_id'=>'1',
        ];
        Member::create($data);
        return redirect('/member');
    }

    function edit(Request $req,$id){
        $user['users'] = User::get();
        $edit = Member::find($id);
        $data = [
            'name'=>$edit->name,
            'no_hp'=>$edit->no_hp,
            'email'=>$edit->email,
            'nik'=>$edit->nik,
            'foto'=>$edit->foto,
            'ktp'=>$edit->ktp,
            'alamat'=>$edit->alamat,
            'users_id'=>$edit->users_id,
            'action'=> url('/member/update').'/'.$edit->id
        ];


        return view('member.memberedit',$data,$user);
    }
    function update(Request $req){
        $data = [
            'name'=>$req->name,
            'no_hp'=>$req->no_hp,
            'email'=>$req->email,
            'nik'=>$req->nik,
            'ktp'=>$req->ktp,
            'alamat'=>$req->alamat,
            'users_id'=>$req->users_id,
        ];

            if ($req->hasfile('foto')) {
                $data['foto'] = $req->file('foto')->store('foto');
            }

        Member::where('id',$req->id)->update($data);
        return redirect('/member');
    }

    function delete(Request $req){
        $delete = Member::where('id', $req->id)->delete();
        if ($delete) {
            return redirect('/member')->with('pesan','<div class="alert alert-secondary" role="alert">
            member Berhasil Di hapus
          </div>');
        }else{
            return redirect('/member')->with('pesan','<div class="alert alert-secondary" role="alert">
            Member Tidak bisa di hapus
          </div>');
        }
    }
}
