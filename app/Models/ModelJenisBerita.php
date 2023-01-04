<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelJenisBerita extends Model
{
    //use HasFactory;
    public function allData (){
        return DB::table('tbl_jenis_berita')->get();
    }

    public function detailData ($id_jenis_berita){
        return DB::table('tbl_jenis_berita')->where('id_jenis_berita', $id_jenis_berita)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_jenis_berita')->insert($data);
    }

    public function editData($id_jenis_berita, $data)
    {
        DB::table('tbl_jenis_berita')->where('id_jenis_berita', $id_jenis_berita)->update($data);
    }

    public function deleteData($id_jenis_berita)
    {
        DB::table('tbl_jenis_berita')->where('id_jenis_berita', $id_jenis_berita)->delete();
    }
}
