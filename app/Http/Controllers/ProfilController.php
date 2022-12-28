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

    public function add()
    {
        return view('profil.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'nama_profil' => 'required|unique:tbl_profil,nama_profil|min:5',
            'deskripsi_profil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'gambar_profil' => 'required|mimes:jpg,jpeg,bmp,png',
        ], [
            'nama_profil.required' => 'Wajib Disii',
            'nama_profil.unique' => 'nama profil sudah ada !!!',
            'nama_profil.min' => 'Minimal 5 karakter !!!',
            'deskripsi_profil.required' => 'Wajib Disii',
            'visi.required' => 'Wajib Disii',
            'misi.required' => 'Wajib Disii',
            'gambar_profil.required' => 'Wajib Disii',
        ]);

        //upload gambar/foto
        $file = Request()->gambar_profil;
        $fileName = Request()->nama_profil . '.' . $file->extension();
        $file->move(public_path().'/gambar_profil', $fileName );

        $data = [
            'nama_profil' => Request()->nama_profil,
            'deskripsi_profil' => Request()->deskripsi_profil,
            'visi' => Request()->visi,
            'misi' => Request()->misi,
            'gambar_profil' => $fileName,
        ];

        $this->ModelProfil->addData($data);
        return redirect()->route('profil')->with('pesan', 'Data Berhasil di Tambahkan');
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

    public function edit($id_profil)
    {
        $data = [
            'profil' => $this->ModelProfil->detailData($id_profil),
        ];

        return view('profil.edit', $data )->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_profil)
    {
        Request()->validate([
            'nama_profil' => 'required|min:5',
            'deskripsi_profil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'gambar_profil' => 'mimes:jpg,jpeg,bmp,png',
        ], [
            'nama_profil.required' => 'Wajib Disii',
            'nama_profil.min' => 'Minimal 5 karakter !!!',
            'deskripsi_profil.required' => 'Wajib Disii',
            'visi.required' => 'Wajib Disii',
            'misi.required' => 'Wajib Disii',
        ]);

        if (Request()->gambar_profil <> "") {
            //jika ingin ganti foto
            $file = Request()->gambar_profil;
            $fileName = Request()->nama_profil . '.' . $file->extension();
            $file->move(public_path().'/gambar_profil', $fileName );

            $data = [
                'nama_profil' => Request()->nama_profil,
                'deskripsi_profil' => Request()->deskripsi_profil,
                'visi' => Request()->visi,
                'misi' => Request()->misi,
                'gambar_profil' => $fileName,
        ];

            $this->ModelProfil->editData($id_profil, $data);

        }else {
            //jika tidak ingin ganti foto
            $data = [
                'nama_profil' => Request()->nama_profil,
                'deskripsi_profil' => Request()->deskripsi_profil,
                'visi' => Request()->visi,
                'misi' => Request()->misi,
            ];
            
            $this->ModelProfil->editData($id_profil, $data);
        }

        return redirect()->route('profil')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id_profil)
    {
        $this->ModelProfil->deleteData($id_profil);
        return redirect()->route('profil')->with('pesan', 'Data Berhasil di Hapus');
    }
}