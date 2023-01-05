<?php

namespace App\Http\Controllers;

use App\Models\ModelArtikel;
use App\Models\ModelKategori;
use App\Models\ModelJenis;
use App\Models\ModelTag;
use App\Models\ModelJenisBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function __construct(){
        $this->ModelArtikel = new ModelArtikel();
        $this->ModelTag = new ModelTag();
        $this->ModelKategori = new ModelKategori();
        $this->ModelJenis = new ModelJenis();
        $this->ModelJenisBerita = new ModelJenisBerita();
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
        $data = [
            'kategori' => $this->ModelKategori->allData(),
            'tag' => $this->ModelTag->allData(),
            'jenisBerita' => $this->ModelJenisBerita->allData(),
            'jenis' => $this->ModelJenis->allData(),
        ];
        return view('artikel.tambah', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'judul_artikel' => 'required|unique:tbl_artikel,judul_artikel|min:30',
            'kategori_id' => 'required',
            'tag_id' => 'required',
            'jenis_berita_id' => 'required',
            'jenis_id' => 'required',
            'deskripsi_artikel' => 'required',
            'gambar_artikel' => 'required|mimes:jpg,jpeg,bmp,png',
        ], [
            'judul_artikel.required' => 'Wajib Disii',
            'judul_artikel.unique' => 'Judul Berita sudah ada !!!',
            'judul_artikel.min' => 'Minimal 30 karakter !!!',
            'kategori_id.required' => 'Wajib Disii',
            'tag_id.required' => 'Wajib Disii',
            'jenis_berita_id.required' => 'Wajib Disii',
            'jenis_id.required' => 'Wajib Disii',
            'deskripsi_artikel.required' => 'Wajib Disii',
            'gambar_artikel.required' => 'Wajib Disii',
        ]);

        //upload gambar/foto
        $file = Request()->gambar_artikel;
        $fileName = Request()->judul_artikel . '.' . $file->extension();
        $file->move(public_path().'/gambar_artikel', $fileName );

        $data = [
            'judul_artikel' => Request()->judul_artikel,
            'kategori_id' => Request()->kategori_id,
            'tag_id' => Request()->tag_id,
            'jenis_berita_id' => Request()->jenis_berita_id,
            'jenis_id' => Request()->jenis_id,
            'deskripsi_artikel' => Request()->deskripsi_artikel,
            'gambar_artikel' => $fileName,
        ];

        $this->ModelArtikel->addData($data);
        return redirect()->route('artikel')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function edit($id_artikel)
    {
        $data = [
            'artikel' => $this->ModelArtikel->detailData($id_artikel),
            'tag' => $this->ModelTag->allData(),
            'jenisBerita' => $this->ModelJenisBerita->allData(),
            'kategori' => $this->ModelKategori->allData(),
            'jenis' => $this->ModelJenis->allData(),
        ];

        return view('artikel.edit', $data )->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_artikel)
    {
        Request()->validate([
            'judul_artikel' => 'required|min:30',
            'kategori_id' => 'required',
            'tag_id' => 'required',
            'jenis_berita_id' => 'required',
            'jenis_id' => 'required',
            'deskripsi_artikel' => 'required',
            'gambar_artikel' => 'mimes:jpg,jpeg,bmp,png',
        ], [
            'judul_artikel.required' => 'Wajib Disii',
            'judul_artikel.min' => 'Minimal 30 karakter !!!',
            'kategori_id.required' => 'Wajib Disii',
            'tag_id.required' => 'Wajib Disii',
            'jenis_berita_id.required' => 'Wajib Disii',
            'jenis_id.required' => 'Wajib Disii',
            'deskripsi_artikel.required' => 'Wajib Disii',
        ]);

        if (Request()->gambar_artikel <> "") {
            //jika ingin ganti foto
            $file = Request()->gambar_artikel;
            $fileName = Request()->judul_artikel . '.' . $file->extension();
            $file->move(public_path().'/gambar_artikel', $fileName );

            $data = [
                'judul_artikel' => Request()->judul_artikel,
                'kategori_id' => Request()->kategori_id,
                'tag_id' => Request()->tag_id,
                'jenis_berita_id' => Request()->jenis_berita_id,
                'jenis_id' => Request()->jenis_id,
                'deskripsi_artikel' => Request()->deskripsi_artikel,
                'gambar_artikel' => $fileName,
                'status' => Request()->status,
        ];

            $this->ModelArtikel->editData($id_artikel, $data);

        }else {
            //jika tidak ingin ganti foto
            $data = [
                'judul_artikel' => Request()->judul_artikel,
                'kategori_id' => Request()->kategori_id,
                'tag_id' => Request()->tag_id,
                'jenis_berita_id' => Request()->jenis_berita_id,
                'jenis_id' => Request()->jenis_id,
                'deskripsi_artikel' => Request()->deskripsi_artikel,
                'status' => Request()->status,
            ];
            
            $this->ModelArtikel->editData($id_artikel, $data);
        }

        return redirect()->route('artikel')->with('pesan', 'Data Berhasil di Update');
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

    //public function status($id_artikel)
    //{
    ///    $data = [
     //       'artikel' => $this->ModelArtikel->detailData($id_artikel),
     //   ];
    //    $status_sekarang = $data->status;
    //    if ($status_sekarang == 1 ) {
     //       $this->ModelArtikel->detailData($id_artikel)->update([
    //            'status'=>0
    //        ]);
    //    }else {
     //       $this->ModelArtikel->detailData($id_artikel)->update([
     //           'status'=>1
     //       ]);
     //   }
   // }
}
