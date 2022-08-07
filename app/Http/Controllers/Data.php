<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Data extends Controller
{
    public function index(){
        $id = Auth::user()->name;
        $data = DB::table('historis')->where('nama', $id)->get();
        return view('user.homepage', compact('data'));
    }
    public function profile(){
        $id = Auth::user()->email;
        $data = DB::table('users')->where('email', $id)->get();
        return view('user.profile', compact('data'));
    }
    public function test(){
        $tipe = 'verbal';
        $soal = DB::table('soals')->where('tipe', $tipe)->get();
        return view('user.test', compact('soal'));
    }
}
