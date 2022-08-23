<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengujian extends Model
{
    use HasFactory;
    protected $table ='pengujians';
    protected $fillable = [
        'id_bakat',
        'soal',
        'a',
        'b',
        'c',
        'd',
    ];

    public function Bakat(){
        return $this->belongsTo(Bakat::class,'id_bakat','id');
    }


}
