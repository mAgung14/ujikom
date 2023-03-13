<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnosakerusakan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'diagnosa_kerusakan';
    protected $guarded = [];

        public function kerusakan(){
            return $this->belongsTo(kerusakan::class, 'id_kerusakan','id');
        }

        public function jenis(){
           return $this->belongsTo(jeniskerusakan::class,'id_jeniskerusakan', 'id');
        }
}
