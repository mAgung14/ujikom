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

   public function users(){
         return $this->belongsTo(User::class, 'users_id');
     }

     public function member(){
         return $this->hasMany(Mekanik::class, 'id');
     }
}
