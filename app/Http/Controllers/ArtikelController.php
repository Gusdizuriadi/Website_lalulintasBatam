<?php

namespace App\Http\Controllers;

use App\Models\ModelArtikel;
use App\Models\ModelKategori;
use App\Models\ModelJenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function __construct(){
        $this->ModelArtikel = new ModelArtikel();
        $this->ModelKategori = new ModelKategori();
        $this->ModelJenis = new ModelJenis();
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
        $kategori = [
            'kategori' => $this->ModelKategori->allData(),
        ];

        $jenis = [
            'jenis' => $this->ModelJenis->allData(),
        ];
        return view('artikel.tambah', $kategori, $jenis)->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'judul_artikel' => 'required',
            'kategori_id' => 'required',
            'jenis_id' => 'required',
            'deskripsi_artikel' => 'required',
            'tanggal_posting' => 'required',
            'gambar_artikel' => 'required|mimes:jpg,jpeg,bmp,png',
        ], [
            'judul_artikel.required' => 'Wajib Disii',
            'kategori_id.required' => 'Wajib Disii',
            'jenis_id.required' => 'Wajib Disii',
            'deskripsi_artikel.required' => 'Wajib Disii',
            'tanggal_posting.required' => 'Wajib Disii',
            'gambar_artikel.required' => 'Wajib Disii',
        ]);

        //upload gambar/foto
        $file = Request()->gambar_artikel;
        $fileName = Request()->judul_artikel . '.' . $file->extension();
        $file->move(public_path().'/gambar_artikel', $fileName );

        $data = [
            'judul_artikel' => Request()->judul_artikel,
            'kategori_id' => Request()->kategori_id,
            'jenis_id' => Request()->jenis_id,
            'deskripsi_artikel' => Request()->deskripsi_artikel,
            'tanggal_posting' => Request()->tanggal_posting,
            'gambar_artikel' => $fileName,
        ];

        $this->ModelArtikel->addData($data);
        return redirect()->route('artikel')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function edit($id_artikel)
    {
        $data = [
            'artikel' => $this->ModelArtikel->detailData($id_artikel),
        ];

        return view('artikel.edit', $data )->with([
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
