<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerusakan extends Model
{
    use HasFactory;
    protected $table = "kerusakan";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function member(){
        return $this->belongsTo(Member::class, 'id_member');
    }
}
