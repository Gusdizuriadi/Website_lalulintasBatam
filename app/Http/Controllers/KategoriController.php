<?php

namespace App\Http\Controllers;

use App\Models\ModelKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{

    public function __construct(){
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
            'nama_kategori' => 'required',
        ], [
            'nama_kategori.required' => 'Wajib Disii',
            //'nama_kategori.unique' => 'Nama Kategori Sudah Ada',
        ]);

        $data = [
            'nama_kategori' => Request()->nama_kategori,
        ];

        $this->ModelKategori->addData($data);
        return redirect()->route('kategori')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function edit($id_kategori)
    {
        if (!$this->ModelKategori->detailData($id_kategori)) {
            abort(404);
        }

        $data = [
            'kategori' => $this->ModelKategori->detailData($id_kategori),
        ];

        return view('kategori.edit', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_kategori)
    {
        Request()->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori.required' => 'Wajib Disii',
            //'nama_kategori.unique' => 'Nama Kategori Sudah Ada',
        ]);

        $data = [
            'nama_kategori' => Request()->nama_kategori,
        ];

        $this->ModelKategori->editData($id_kategori, $data);
        return redirect()->route('kategori')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id_kategori)
    {
        $this->ModelKategori->deleteData($id_kategori);
        return redirect()->route('kategori')->with('pesan', 'Data Berhasil di Hapus');
    }
}