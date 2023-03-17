<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerusakan extends Model
{
    use HasFactory;
    protected $table = "kerusakan";
    protected $primaryKey = "id";
    protected $fillable = [
            'jnskendaraan' ,
            'tipe_kendaraan' ,
            'tahunkendaraan' ,
            'foto_kendaraan' ,
            'member_id'
    ];

    public function member(){
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function diagnosa(){
        return $this->hasMany(diagnosakerusakan::class,'id_kerusakan', 'id');
   }
   public function perbaikan(){
    return $this->hasMany(perbaikan::class, 'id');
   }
}
