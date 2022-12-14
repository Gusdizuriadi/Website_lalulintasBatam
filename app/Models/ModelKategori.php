<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelKategori extends Model
{
    public function allData()
    {
        return DB::table('tbl_kategori')->get();
    }

    public function addData($data)
    {
        return DB::table('tbl_kategori')->insert($data);
    }
}
