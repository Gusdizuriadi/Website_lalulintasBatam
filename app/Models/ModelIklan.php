<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelIklan extends Model
{
    //use HasFactory;
    public function allData (){
        return DB::table('tbl_iklan')
        ->get();
    } 

    public function detailData($id_iklan)
    {
        return DB::table('tbl_iklan')
        ->where('id_iklan', $id_iklan)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_iklan')
        ->insert($data);
    }

    public function editData($id_iklan, $data)
    {
        DB::table('tbl_iklan')
        ->where('id_iklan', $id_iklan)
        ->update($data);
    }

    public function deleteData($id_iklan)
    {
        DB::table('tbl_iklan')
        ->where('id_iklan', $id_iklan)
        ->delete();
    }
}
