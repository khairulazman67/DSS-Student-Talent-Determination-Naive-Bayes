<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $data = DB::table('histori')->get();
        $count = DB::table('histori')->count();
        $mhs = DB::table('users')->where('isAdmin', '0')->count();
        return view('admin.homepage', compact('data','count','mhs') );
    }
}
