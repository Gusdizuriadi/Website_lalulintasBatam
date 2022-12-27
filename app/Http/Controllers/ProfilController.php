<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProfil;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function __construct(){
        $this->ModelProfil = new ModelProfil();
    }
    
    public function index()
    {
        $data = [
            'profil' => $this->ModelProfil->allData(),
        ];
        return view('profil.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function detail($id_profil)
    {
        $data = [
            'profil' => $this->ModelProfil->detailData($id_profil),
        ];
        return view('profil.detail', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function delete($id_profil)
    {
        $this->ModelProfil->deleteData($id_profil);
        return redirect()->route('profil')->with('pesan', 'Data Berhasil di Hapus');
    }
}
