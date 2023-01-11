<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelKategori;
use App\Models\ModelProfil;
use App\Models\ModelTag;
use App\Models\ModelIklan;
use App\Models\ModelArtikel;
use App\Models\ModelSosmed;

class FrontendController extends Controller
{

    public function __construct(){
        $this->ModelArtikel = new ModelArtikel();
        $this->ModelKategori = new ModelKategori();
        $this->ModelProfil = new ModelProfil();
        $this->ModelTag = new ModelTag();
        $this->ModelIklan = new ModelIklan();
        $this->ModelSosmed = new ModelSosmed();
    }

    public function index()
    {
        $data = [
            'profil' => $this->ModelProfil->allData(),
            'tag' => $this->ModelTag->allData(),
            'iklan' => $this->ModelIklan->allData(),
            'sosialMedia' => $this->ModelSosmed->allData(),
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
            'sosialMedia' => $this->ModelSosmed->allData(),
            'kategori' => $this->ModelKategori->allData(),
            'artikel' => $this->ModelArtikel->viewsData($id_artikel),
            'artikel' => $this->ModelArtikel->detailData($id_artikel),
        ];
        return view('frontend.artikel.detail', $data);
    }
    
    public function artikel_kategori($kategori_id)
    {
        $data = [
            'iklan' => $this->ModelIklan->allData(),
            'tag' => $this->ModelTag->allData(),
            'sosialMedia' => $this->ModelSosmed->allData(),
            'kategori' => $this->ModelKategori->allData(),
            'artikel' => $this->ModelArtikel->artikel_kategori($kategori_id),
        ];
        return view('frontend.artikel.artikel_kategori', $data);
    }
}
