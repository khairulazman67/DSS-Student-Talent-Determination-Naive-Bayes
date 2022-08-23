<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;

    public function Bakat(){
        return $this->belongsTo(Bakat::class,'id_bakat','id');
    }
}
