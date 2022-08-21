<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\User;
use App\Models\Hasilpengujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Data extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        // dd($id);
        $data = Hasilpengujian::where('id_user', $id)->get();
        // dd($data);
        return view('user.homepage', compact('data'));
    }
    public function profile(){
        $id = Auth::user()->id;

        $data = User::where('id', $id)->get();
        // $data = DB::table('hasilpengujians')->where('id', $id)->get();
        // dd($data->user);
        return view('user.profile', compact('data'));
    }

    public function uji(){
        return view('user.uji');
    }

    public function test($id){

        if ($id == 1){
            $tipe = "verbal";
        }if($id == 2 ){
            $tipe = "numerik";
        }if($id == 3){
            $tipe = "skolastik";
        }if($id == 4){
            $tipe = "spasial";
        }if($id == 5){
            $tipe = "bahasa";
        }

        $soal = DB::table('soals')->where('tipe', $tipe)->get();
        return view('user.test', compact('soal','id','tipe'));
    }
    public function histori(){
        $id = Auth::user()->id;
        $data = Hasilpengujian::where('id_user', $id)->get();
        return view('user.homepage', compact('data'));
    }
    public function upload($id){
        $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/verbal.py"));
        $kita = explode('_______________________', $a);
        $hasil = $kita[0];
        $verbal = session()->get('bakatverbal');
        $numerik = session()->get('numerik');
        $skolastik = session()->get('bakatverbal');
        $spasial = session()->get('bakatverbal');
        $bahasa = session()->get('bakatverbal');
        if($verbal == Null){
            session()->put('bakatverbal', $hasil);
        }elseif($numerik == Null){
            session()->put('numerik', $hasil);
        }elseif($skolastik == Null){
            session()->put('skolastik', $hasil);
        }elseif($spasial == Null){
            session()->put('spasial', $hasil);
        }elseif($bahasa == Null){
            session()->put('bahasa', $hasil);
        }
        if($id == 6){
            return redirect(route('hasil'));
        }else{
            return redirect(route('test',$id));
        }
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
    public function hasil(){
        $verbal = session()->get('bakatverbal');
        $numerik = session()->get('numerik');
        $skolastik = session()->get('bakatverbal');
        $spasial = session()->get('bakatverbal');
        $bahasa = session()->get('bakatverbal');

        return view('user.hasil', compact('verbal','numerik','skolastik','spasial','bahasa'));
    }
}
