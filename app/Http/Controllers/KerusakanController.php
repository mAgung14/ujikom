<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    function ambil(){
        return view('kerusakan.kerusakan');
    }

    function tambah(){
        $data = [
            'jnskendaraan' => '',
            'tipe_kendaraan' => '',
            'tahunkendaraan' => '',
            'foto_kendaraan' => '',
            'id_member' => '',
            'action' => url('/kerusakan/add')
        ];
        return view('kerusakan.kerusakanadd');
    }
}
