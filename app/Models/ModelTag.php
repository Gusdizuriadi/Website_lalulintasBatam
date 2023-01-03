<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelTag extends Model
{
    //use HasFactory;
    public function allData (){
        return DB::table('tbl_tag')->get();
    }

    public function detailData ($id_tag){
        return DB::table('tbl_tag')->where('id_tag', $id_tag)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_tag')->insert($data);
    }

    public function editData($id_tag, $data)
    {
        DB::table('tbl_tag')->where('id_tag', $id_tag)->update($data);
    }

    public function deleteData($id_tag)
    {
        DB::table('tbl_tag')->where('id_tag', $id_tag)->delete();
    }
}
