<?php

namespace App\Http\Controllers;

use App\Models\kerusakan;
use App\Models\Member;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    public function candak(){
        $kerusakan['kerusakan'] = kerusakan::where('member_id','=',auth()->user()->member->id)->latest()->get();
        return view('kerusakan.kerusakan', $kerusakan);
    }

    public function oi(){
        $member['member'] = Member::get();
        $data = [
            'jnskendaraan' => '',
            'tipe_kendaraan' => '',
            'tahunkendaraan' => '',
            'foto_kendaraan' => '',
            'member_id' => '',
            'action' => url('/kerusakan/add')
        ];
        return view('kerusakan.kerusakanadd',$data,$member);
    }

    public function add(Request $req){
        // dd($req);
        if ($req->hasfile('foto_kendaraan')) {
            $foto_kendaraan = $req->file('foto_kendaraan')->store('foto_kendaraan');
        }else {
            $foto_kendaraan = "";
        }

        $data = [
            'jnskendaraan' => $req->jnskendaraan,
            'tipe_kendaraan' => $req->tipe_kendaraan,
            'tahunkendaraan' => $req->tahunkendaraan,
            'foto_kendaraan' => $foto_kendaraan,
            'member_id' => $req->member_id,
        ];
        kerusakan::create($data);
        return redirect('/kerusakan');
    }

    function edit($id){
        $edit = kerusakan::find($id);
        $data = [
            'jnskendaraan' => $edit->jnskendaraan,
            'tipe_kendaraan' => $edit->tipe_kendaraan,
            'tahunkendaraan' => $edit->tahunkendaraan,
            'member_id' => $edit->member_id,
            'action'=> url('/kerusakan/update').'/'.$edit->id
        ];


        return view('kerusakan.kerusakanadd',$data);
    }

    function update(Request $req){
        $data = [
            'jnskendaraan' => $req->jnskendaraan,
            'tipe_kendaraan' => $req->tipe_kendaraan,
            'tahunkendaraan' => $req->tahunkendaraan,
            'foto_kendaraan' => $req->foto_kendaraan,
            'member_id' => $req->member_id,
        ];
        if ($req->hasfile('foto_kendaraan')) {
            $edit['foto_kendaraan'] = $req->file('foto_kendaraan')->store('img');
        }
        kerusakan::where('id',$req->id)->update($data);
        return redirect('/kerusakan');
    }

    function delete(Request $req){
        $delete = kerusakan::where('id', $req->id)->delete();
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
