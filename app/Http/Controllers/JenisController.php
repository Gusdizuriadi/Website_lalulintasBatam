<?php

namespace App\Http\Controllers;

use App\Models\ModelJenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JenisController extends Controller
{
    public function __construct(){
        $this->ModelJenis = new ModelJenis();
    }

    public function index()
    {
        $data = [
            'jenis' => $this->ModelJenis->allData(),
        ];
        return view('jenis.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function add()
    {
        return view('jenis.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'nama_jenis' => 'required|unique:tbl_jenis,nama_jenis',
        ], [
            'nama_jenis.required' => 'Wajib Disii',
            'nama_jenis.unique' => 'Nama jenis pelanggaran Sudah Ada',
        ]);

        $data = [
            'nama_jenis' => Request()->nama_jenis,
        ];

        $this->ModelJenis->addData($data);
        return redirect()->route('jenis')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function edit($id_jenis)
    {
        if (!$this->ModelJenis->detailData($id_jenis)) {
            abort(404);
        }

        $data = [
            'jenis' => $this->ModelJenis->detailData($id_jenis),
        ];

        return view('jenis.edit', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_jenis)
    {
        Request()->validate([
            'nama_jenis' => 'required',
        ], [
            'nama_jenis.required' => 'Wajib Disii',
            //'nama_jenis.unique' => 'Nama jenis Sudah Ada',
        ]);

        $data = [
            'nama_jenis' => Request()->nama_jenis,
        ];

        $this->ModelJenis->editData($id_jenis, $data);
        return redirect()->route('jenis')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id_jenis)
    {
        $this->ModelJenis->deleteData($id_jenis);
        return redirect()->route('jenis')->with('pesan', 'Data Berhasil di Hapus');
    }
}