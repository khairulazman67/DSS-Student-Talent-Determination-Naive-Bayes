<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jurusan_id'
    ];
    public function user(){
        return $this->hasMany(User::class);
    }
    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}
