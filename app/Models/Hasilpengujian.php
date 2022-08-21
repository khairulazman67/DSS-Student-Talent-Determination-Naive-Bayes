<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasilpengujian extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'id_user',
    //     'waktu_uji',
    //     'hasil',
    // ];
    public function User()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }

}
