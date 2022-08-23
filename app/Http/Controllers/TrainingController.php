<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Dataset;

use App\Imports\DataImport;
class TrainingController extends Controller
{
    public function index(){
        $dataVerbal = Dataset::where('id_bakat',1)->get();
        return view('admin.pengujian',compact('dataVerbal'));
    }


    public function insert(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'data' => 'required|file'
        ]);

        if ($validator->fails()) {
            echo "kosong";
        }
        $rows = Excel::toArray(new DataImport,$request->data);

        $data = Dataset::where('id_bakat',$id)->get();
        $dataset = new Dataset;

        if(count($data)>0)
            $dataset::truncate();

        foreach($rows as $key => $value){
            foreach($value as $row){
                $insert_data[] = array(
                    'id_bakat' => $row[0],
                    'soal1' => $row[1],
                    'soal2' => $row[2],
                    'soal3' => $row[3],
                    'soal4' => $row[4],
                    'soal5' => $row[5],
                    'soal6' => $row[6],
                    'soal7' => $row[7],
                    'soal8' => $row[8],
                    'soal9' => $row[9],
                    'soal10' => $row[10],
                    'hasil' => $row[11],
                );
            }
        }
        if(!empty($insert_data)){
            $dataset::insert($insert_data);
        }

        return redirect()->route('pengujian');
    }
}
