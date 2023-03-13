<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jeniskerusakan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'jenis_kerusakan';
    protected $guarded = [];

    public function diagnosa(){
        $this->belongsTo(diagnosakerusakan::class, 'id');
    }
}
