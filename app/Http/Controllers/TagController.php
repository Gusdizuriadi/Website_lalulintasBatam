<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelTag;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function __construct(){
        $this->ModelTag = new ModelTag();
    }

    public function index()
    {
        $data = [
            'tag' => $this->ModelTag->allData(),
        ];
        return view('tag.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function add()
    {
        return view('tag.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'nama_tag' => 'required|unique:tbl_tag,nama_tag',
        ], [
            'nama_tag.required' => 'Wajib Disii',
            'nama_tag.unique' => 'Nama tag Sudah Ada',
        ]);

        $data = [
            'nama_tag' => Request()->nama_tag,
        ];

        $this->ModelTag->addData($data);
        return redirect()->route('tag')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function edit($id_tag)
    {
        if (!$this->ModelTag->detailData($id_tag)) {
            abort(404);
        }

        $data = [
            'tag' => $this->ModelTag->detailData($id_tag),
        ];

        return view('tag.edit', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_tag)
    {
        Request()->validate([
            'nama_tag' => 'required',
        ], [
            'nama_tag.required' => 'Wajib Disii',
        ]);

        $data = [
            'nama_tag' => Request()->nama_tag,
        ];

        $this->ModelTag->editData($id_tag, $data);
        return redirect()->route('tag')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id_tag)
    {
        $this->ModelTag->deleteData($id_tag);
        return redirect()->route('tag')->with('pesan', 'Data Berhasil di Hapus');
    }
}
