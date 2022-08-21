<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'id',
    //     'nama',
    //     'jurusan_id'
    // ];
    public function User(){
        return $this->hasMany(User::class,'prodi_id');
        // return $this->hasMany(Prodi::class,'id_jurusan');
    }
    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}
