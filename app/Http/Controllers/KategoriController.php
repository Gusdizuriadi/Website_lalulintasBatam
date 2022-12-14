<?php

namespace App\Http\Controllers;

use App\Models\ModelKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{

    public function __construct()
    {
        $this->ModelKategori = new ModelKategori();
    }

    public function index()
    {
        $data = [
            'kategori' => $this->ModelKategori->allData(),
        ];
        return view('kategori.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function add()
    {
        return view('kategori.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'nama_kategori' => 'required|unique:tbl_kategori, nama_kategori|min:4|max:20',
        ], [
            'nama_kategori.required' => 'Nama Kategori tidak boleh kosong',
            'nama_kategori.unique' => 'Nama Kategori Sudah Ada',
            'nama_kategori.min' => 'Minimal 4 Karakter',
            'nama_kategori.max' => 'Maximal 20 Karakter',
        ]);

        $data = [
            'nama_kategori' => Request()->nama_kategori,
        ];

        $this->ModelKategori->addData($data);
        return redirect()->route('kategori')->with('Pesan', 'Data Berhasil di Tambahkan');
    }
}
