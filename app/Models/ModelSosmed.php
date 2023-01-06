<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelSosmed extends Model
{
    //use HasFactory;
    public function allData (){
        return DB::table('tbl_sosmed')
        ->get();
    } 

    public function detailData($id_sosmed)
    {
        return DB::table('tbl_sosmed')
        ->where('id_sosmed', $id_sosmed)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_sosmed')
        ->insert($data);
    }

    public function editData($id_sosmed, $data)
    {
        DB::table('tbl_sosmed')
        ->where('id_sosmed', $id_sosmed)
        ->update($data);
    }

    public function deleteData($id_sosmed)
    {
        DB::table('tbl_sosmed')
        ->where('id_sosmed', $id_sosmed)
        ->delete();
    }
}