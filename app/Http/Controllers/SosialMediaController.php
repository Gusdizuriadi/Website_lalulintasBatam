<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelSosmed;
use Illuminate\Support\Facades\Auth;

class SosialMediaController extends Controller
{
    public function __construct(){
        $this->ModelSosmed = new ModelSosmed();
    }

    public function index()
    {
        $data = [
            'sosialMedia' => $this->ModelSosmed->allData(),
        ];
        return view('sosialMedia.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function add()
    {
        return view('sosialMedia.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'nama_sosmed' => 'required|unique:tbl_sosmed,nama_sosmed',
            'link_sosmed' => 'required',
        ], [
            'nama_sosmed.required' => 'Wajib Disii',
            'nama_sosmed.unique' => 'Nama sosmed Sudah Ada',
            'link_sosmed.required' => 'Wajib Disii',
        ]);

        $data = [
            'nama_sosmed' => Request()->nama_sosmed,
            'link_sosmed' => Request()->link_sosmed,
        ];

        $this->ModelSosmed->addData($data);
        return redirect()->route('sosialMedia')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function edit($id_sosmed)
    {
        if (!$this->ModelSosmed->detailData($id_sosmed)) {
            abort(404);
        }

        $data = [
            'sosialMedia' => $this->ModelSosmed->detailData($id_sosmed),
        ];

        return view('sosialMedia.edit', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_sosmed)
    {
        Request()->validate([
            'nama_sosmed' => 'required',
            'link_sosmed' => 'required',
        ], [
            'nama_sosmed.required' => 'Wajib Disii',
            'link_sosmed.required' => 'Wajib Disii',
            //'nama_sosmed.unique' => 'Nama jenis Sudah Ada',
        ]);

        $data = [
            'nama_sosmed' => Request()->nama_sosmed,
            'link_sosmed' => Request()->link_sosmed,
        ];

        $this->ModelSosmed->editData($id_sosmed, $data);
        return redirect()->route('sosialMedia')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id_sosmed)
    {
        $this->ModelSosmed->deleteData($id_sosmed);
        return redirect()->route('sosialMedia')->with('pesan', 'Data Berhasil di Hapus');
    }
}
