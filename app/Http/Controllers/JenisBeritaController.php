<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelJenisBerita;
use Illuminate\Support\Facades\Auth;

class JenisBeritaController extends Controller
{
    public function __construct(){
        $this->ModelJenisBerita = new ModelJenisBerita();
    }

    public function index()
    {
        $data = [
            'jenisBerita' => $this->ModelJenisBerita->allData(),
        ];
        return view('jenisBerita.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function add()
    {
        return view('jenisBerita.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'nama_jenis_berita' => 'required|unique:tbl_jenis_berita,nama_jenis_berita',
        ], [
            'nama_jenis_berita.required' => 'Wajib Disii',
            'nama_jenis_berita.unique' => 'Nama jenis berita Sudah Ada',
        ]);

        $data = [
            'nama_jenis_berita' => Request()->nama_jenis_berita,
        ];

        $this->ModelJenisBerita->addData($data);
        return redirect()->route('jenisBerita')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function edit($id_jenis_berita)
    {
        if (!$this->ModelJenisBerita->detailData($id_jenis_berita)) {
            abort(404);
        }

        $data = [
            'jenisBerita' => $this->ModelJenisBerita->detailData($id_jenis_berita),
        ];

        return view('jenisBerita.edit', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_jenis_berita)
    {
        Request()->validate([
            'nama_jenis_berita' => 'required',
        ], [
            'nama_jenis_berita.required' => 'Wajib Disii',
            //'nama_jenis.unique' => 'Nama jenis Sudah Ada',
        ]);

        $data = [
            'nama_jenis_berita' => Request()->nama_jenis_berita,
        ];

        $this->ModelJenisBerita->editData($id_jenis_berita, $data);
        return redirect()->route('jenisBerita')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id_jenis_berita)
    {
        $this->ModelJenisBerita->deleteData($id_jenis_berita);
        return redirect()->route('jenisBerita')->with('pesan', 'Data Berhasil di Hapus');
    }
}
