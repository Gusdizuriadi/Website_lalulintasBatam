<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelProfil extends Model
{
    //use HasFactory;
    public function allData (){
        return DB::table('tbl_profil')
        ->get();
    } 

    public function detailData($id_profil)
    {
        return DB::table('tbl_profil')
        ->where('id_profil', $id_profil)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_profil')
        ->insert($data);
    }

    public function editData($id_profil, $data)
    {
        DB::table('tbl_profil')
        ->where('id_profil', $id_profil)
        ->update($data);
    }

    public function deleteData($id_profil)
    {
        DB::table('tbl_profil')
        ->where('id_profil', $id_profil)
        ->delete();
    }
}
