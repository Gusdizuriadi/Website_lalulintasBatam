<?php

namespace App\Http\Controllers;

use App\Models\ModelArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function __construct(){
        $this->ModelArtikel = new ModelArtikel();
    }

    public function index()
    {
        $data = [
            'artikel' => $this->ModelArtikel->allData(),
        ];
        return view('artikel.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function add()
    {
        return view('artikel.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function detail($id_artikel)
    {
        $data = [
            'artikel' => $this->ModelArtikel->detailData($id_artikel),
        ];
        return view('artikel.detail', $data)->with([
            'user' => Auth::user()
        ]);
    }


    public function delete($id_artikel)
    {
        $this->ModelArtikel->deleteData($id_artikel);
        return redirect()->route('artikel')->with('pesan', 'Data Berhasil di Hapus');
    }
}
