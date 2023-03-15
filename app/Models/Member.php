<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "member";
    protected $fillable = [
        'name',
        'no_hp',
        'email',
        'nik',
        'foto',
        'ktp',
        'alamat',
        'users_id'
    ];

   public function user(){
         return $this->hasMany(User::class, 'id','id_users');
     }

     public function mekanik(){
         return $this->belongsTo(Mekanik::class, 'id_mekanik','id');
     }
     public function kerusakan(){
         return $this->hasMany(kerusakan::class, 'id');
     }
}
