<?php

namespace App\Http\Controllers;

use App\Models\kerusakan;
use App\Models\Member;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    public function candak(){
        $kerusakan['kerusakan'] = kerusakan::with('Member')->get();
        return view('kerusakan.kerusakan', $kerusakan);
    }

    public function oi(){
        $member['member'] = Member::get();
        $data = [
            'jnskendaraan' => '',
            'tipe_kendaraan' => '',
            'tahunkendaraan' => '',
            'foto_kendaraan' => '',
            'id_member' => '',
            'action' => url('/kerusakan/add')
        ];
        return view('kerusakan.kerusakanadd',$data,$member);
    }

    public function add(Request $req){
        // dd($req);
        if ($req->hasfile('foto_kendaraan')) {
            $foto = $req->file('foto_kendaraan')->store('img');
        }else {
            $foto = "";
        }

        $data = [
            'jnskendaraan' => $req->jnskendaraan,
            'tipe_kendaraan' => $req->tipe_kendaraan,
            'tahunkendaraan' => $req->tahunkendaraan,
            'foto_kendaraan' => $foto,
            'id_member' => $req->id_member,
        ];
        kerusakan::create($data);
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
