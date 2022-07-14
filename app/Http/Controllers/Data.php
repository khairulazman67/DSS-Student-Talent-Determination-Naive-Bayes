<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Data extends Controller
{
    public function index(){
        $id = Auth::user()->name;
        $data = DB::table('histori')->where('nama', $id)->get();
        return view('user.homepage', compact('data'));
    }
    public function profile(){
        $id = Auth::user()->name;
        $data = DB::table('users')->where('name', $id)->get();
        return view('user.profile', compact('data'));
    }
}
