<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    function tambah(){
        $data = [
            'username'=> '',
            'password'=>'',
            'email'=>'',
            'action' =>  url('/admin/add'),
            'tombol' => 'Sign Up'
        ];
        return view('auth.adminadd',$data);
    }
    function add(Request $req){
        $data = [
            'username'=>$req->username,
            'password'=> Hash::make($req->password),
            'level'=>'member',
            'email'=>$req->email
        ];
        $user = User::create($data);
        Member::create([
            'name'=>$user->username,
            'email'=>$user->email,
            'users_id'=>$user->id
        ]);
        return redirect('/login');
    }
}
