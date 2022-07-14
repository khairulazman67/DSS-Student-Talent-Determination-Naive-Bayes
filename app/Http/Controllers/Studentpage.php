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
        $data = DB::table('pengujian')->get();
        return view('admin.pengujian', compact('data'));
    }

    public function edit($id){
        $data = DB::table('users')->where('id', $id)->get();
        return view('admin.datastudent', compact('data'));
    }

    public function update(Request $request, $id){
        echo $request;
    }
}
