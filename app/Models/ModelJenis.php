<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelJenis extends Model
{
   // use HasFactory;

    public function allData (){
        return DB::table('tbl_jenis')->get();
    }

    public function detailData ($id_jenis){
        return DB::table('tbl_jenis')->where('id_jenis', $id_jenis)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_jenis')->insert($data);
    }

    public function editData($id_jenis, $data)
    {
        DB::table('tbl_jenis')->where('id_jenis', $id_jenis)->update($data);
    }

    public function deleteData($id_jenis)
    {
        DB::table('tbl_jenis')->where('id_jenis', $id_jenis)->delete();
    }
}