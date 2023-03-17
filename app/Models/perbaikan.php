<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perbaikan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'perbaikan';
    protected $guarded = [];

    public function mekanik(){
        return $this->belongsTo(Mekanik::class, 'id_mekanik','id');
    }

    public function kerusakan(){
        return $this->belongsTo(kerusakan::class, 'id_kerusakan','id');
    }
}
