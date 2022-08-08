<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\User;
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

    public function uji(){
        return view('user.uji');
    }

    public function test(){
        $tipe = 'verbal';
        $soal = DB::table('soals')->where('tipe', $tipe)->get();
        return view('user.test', compact('soal'));
    }
    public function histori(){
        $id = Auth::user()->name;
        $data = DB::table('historis')->where('nama', $id)->get();
        return view('user.homepage', compact('data'));
    }
    public function update(Request $request, $id){
        $data = User::find($id);
        $data->name = $request->input('nama');
        $data->nim = $request->input('nim');
        $data->jurusan = $request->input('jurusan');
        $data->prodi = $request->input('prodi');
        $data->nohp = $request->input('nohp');
        $data->alamat = $request->input('alamat');
        $data->email = $request->input('email');
        $data->update();
        return redirect()->back()->with('status','Update Success');
    }
}
