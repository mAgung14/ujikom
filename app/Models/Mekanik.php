<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "mekanik";
    protected $fillable = [
        'name',
        'alamat',
        'status_aktivasi',
        'member_id'
    ];

    public function member(){
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function perbaikan(){
        return $this->belongsTo(perbaikan::class, 'id');
    }
}
