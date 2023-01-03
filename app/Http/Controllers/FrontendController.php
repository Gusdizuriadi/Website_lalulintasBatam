<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelKategori;
use App\Models\ModelProfil;
use App\Models\ModelTag;
use App\Models\ModelIklan;
use App\Models\ModelArtikel;

class FrontendController extends Controller
{

    public function __construct(){
        $this->ModelArtikel = new ModelArtikel();
        $this->ModelKategori = new ModelKategori();
        $this->ModelProfil = new ModelProfil();
        $this->ModelTag = new ModelTag();
        $this->ModelIklan = new ModelIklan();
    }

    public function index()
    {
        $data = [
            'profil' => $this->ModelProfil->allData(),
            'tag' => $this->ModelTag->allData(),
            'iklan' => $this->ModelIklan->allData(),
            'kategori' => $this->ModelKategori->allData(),
            'artikel' => $this->ModelArtikel->allData(),
        ];
        return view('frontend.index', $data);
    }

    public function detail($id_artikel)
    {
        $data = [
            'iklan' => $this->ModelIklan->allData(),
            'tag' => $this->ModelTag->allData(),
            'kategori' => $this->ModelKategori->allData(),
            'artikel' => $this->ModelArtikel->detailData($id_artikel),
        ];
        return view('frontend.artikel.detail', $data);
    }
}
