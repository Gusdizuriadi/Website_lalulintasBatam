<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelKategori;
use App\Models\ModelProfil;
use App\Models\ModelJenis;
use App\Models\ModelArtikel;

class FrontendController extends Controller
{

    public function __construct(){
        $this->ModelArtikel = new ModelArtikel();
        $this->ModelKategori = new ModelKategori();
        $this->ModelProfil = new ModelProfil();
        $this->ModelJenis = new ModelJenis();
    }

    public function index()
    {
        $data = [
            'profil' => $this->ModelProfil->allData(),
            'jenis' => $this->ModelJenis->allData(),
            'kategori' => $this->ModelKategori->allData(),
            'artikel' => $this->ModelArtikel->allData(),
        ];
        return view('frontend.index', $data);
    }
}
