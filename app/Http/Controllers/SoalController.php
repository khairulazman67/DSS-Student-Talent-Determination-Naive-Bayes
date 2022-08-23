<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Pengujian;

use App\Imports\DataImport;
class SoalController extends Controller
{
    public function index(){
        $dataVerbal = Pengujian::where('id_bakat',1)->get();
        return view('admin.dataSoal',compact('dataVerbal'));
    }

    public function insert(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'data' => 'required|file'
        ]);

        if ($validator->fails()) {
            echo "kosong";
        }
        $rows = Excel::toArray(new DataImport,$request->data);

        $data = Pengujian::where('id_bakat',$id)->get();
        $pengujian = new Pengujian;

        if(count($data)>0)
            $pengujian::truncate();

        foreach($rows as $key => $value){
            foreach($value as $row){
                $insert_data[] = array(
                    'id_bakat' => $row[0],
                    'soal' => $row[1],
                    'a' => $row[2],
                    'b' => $row[3],
                    'c' => $row[4],
                    'd' => $row[5],
                );
            }
        }
        if(!empty($insert_data)){
            $pengujian::insert($insert_data);
        }

        return redirect()->route('dataSoal');
    }
}
