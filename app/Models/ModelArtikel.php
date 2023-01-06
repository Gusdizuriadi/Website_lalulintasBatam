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
        ->leftJoin('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_artikel.kategori_id')
        ->leftJoin('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_artikel.jenis_id')
        ->leftJoin('tbl_tag', 'tbl_tag.id_tag', '=', 'tbl_artikel.tag_id')
        ->leftJoin('tbl_jenis_berita', 'tbl_jenis_berita.id_jenis_berita', '=', 'tbl_artikel.jenis_berita_id')
        ->orderByRaw('created_at DESC')
        ->simplePaginate(5);
    } 

    public function detailData($id_artikel)
    {
        return DB::table('tbl_artikel')
        ->leftJoin('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_artikel.kategori_id')
        ->leftJoin('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_artikel.jenis_id')
        ->leftJoin('tbl_tag', 'tbl_tag.id_tag', '=', 'tbl_artikel.tag_id')
        ->leftJoin('tbl_jenis_berita', 'tbl_jenis_berita.id_jenis_berita', '=', 'tbl_artikel.jenis_berita_id')
        ->where('id_artikel', $id_artikel)->first();
    }

    public function show($nama_kategori)
    {
        return DB::table('tbl_artikel')
        ->leftJoin('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_artikel.kategori_id')
        ->leftJoin('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_artikel.jenis_id')
        ->leftJoin('tbl_tag', 'tbl_tag.id_tag', '=', 'tbl_artikel.tag_id')
        ->leftJoin('tbl_jenis_berita', 'tbl_jenis_berita.id_jenis_berita', '=', 'tbl_artikel.jenis_berita_id')
        ->where('nama_kategori', $nama_kategori)->first();
    }
    

    public function addData($data)
    {
        DB::table('tbl_artikel')
        ->insert($data);
    }

    public function editData($id_artikel, $data)
    {
        DB::table('tbl_artikel')
        ->where('id_artikel', $id_artikel)
        ->update($data);
    }

    public function deleteData($id_artikel)
    {
        DB::table('tbl_artikel')
        ->where('id_artikel', $id_artikel)
        ->delete();
    }
}