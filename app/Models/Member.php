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
         return $this->belongsTo(User::class, 'id');
     }

     public function mekanik(){
         return $this->belongsTo(Mekanik::class, 'id');
     }
     public function kerusakan(){
         return $this->hasMany(kerusakan::class, 'id');
     }
}
