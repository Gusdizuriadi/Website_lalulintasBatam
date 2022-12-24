<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelArtikel extends Model
{
    //use HasFactory;
    public function allData (){
        return DB::table('tbl_artikel')
        ->leftJoin('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_artikel.id_kategori')
        ->leftJoin('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_artikel.id_jenis')
        ->orderByRaw('tanggal_posting DESC')
        ->get();
    } 

    public function detailData($id_artikel)
    {
        return DB::table('tbl_artikel')
        ->leftJoin('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_artikel.id_kategori')
        ->leftJoin('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_artikel.id_jenis')
        ->where('id_artikel', $id_artikel)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_artikel')->insert($data);
    }

    public function deleteData($id_artikel)
    {
        DB::table('tbl_artikel')->where('id_artikel', $id_artikel)->delete();
    }
}
