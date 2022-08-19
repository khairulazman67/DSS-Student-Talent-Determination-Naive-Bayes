<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengujian extends Model
{
    use HasFactory;
    protected $table ='pengujians';
    protected $fillable = [
        'tipe',
        'a',
        'b',
        'c',
        'd',
        'jawaban',
        'gambar'
    ];
}
