<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Studentpage extends Controller
{
    public function index()
    {
    	$pegawai = DB::table('users')->get();
    	return view('admin.tabledata',['data' => $pegawai]);
 
    }
    public function pengujian(){
        $data = DB::table('soals')->get();
        return view('admin.pengujian', compact('data'));
    }

    public function edit($id){
        $data = DB::table('users')->where('id', $id)->get();
        return view('admin.datastudent', compact('data'));
    }

    public function update(Request $request, $id){
        echo $request;
    }

    public function histori(){ 
        $title = "Histori";
        $data = DB::table('historis')->get();
        return view('admin.histori', compact('data', 'title'));
    }
    public function upload(Request $request)
    {
        $title = "histori";
        $data = DB::table('historis')->get();
        $a = shell_exec(escapeshellcmd("python C:/xampp/htdocs/data/public/python/verbal.py"));
        $kita = explode('_______________________', $a);
        $hasil = $kita[0];
        session()->put('bakatverbal', $hasil);
        return view('admin.histori', compact('hasil','title','data'));
    }
}
