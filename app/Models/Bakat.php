<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bakat extends Model
{
    use HasFactory;

    public function Pengujian(){
        return $this->hasMany(Pengujian::class,'id_bakat');
    }

    public function Dataset(){
        return $this->hasMany(Dataset::class,'id_bakat');
    }
}
