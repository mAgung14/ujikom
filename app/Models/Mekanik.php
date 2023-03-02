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

    public function mekanik(){
        return $this->belongsTo(Member::class, 'id');
    }
}
