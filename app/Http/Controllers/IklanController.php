<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelIklan;
use Illuminate\Support\Facades\Auth;

class IklanController extends Controller
{
    public function __construct(){
        $this->ModelIklan = new ModelIklan();
    }
    
    public function index()
    {
        $data = [
            'iklan' => $this->ModelIklan->allData(),
        ];
        return view('iklan.data', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function add()
    {
        return view('iklan.tambah')->with([
            'user' => Auth::user()
        ]);
    }

    public function insert()
    {
        Request()->validate([
            'nama_iklan' => 'required',
            'link_iklan' => 'required',
            'gambar_iklan' => 'required|mimes:jpg,jpeg,bmp,png',
        ], [
            'nama_iklan.required' => 'Wajib Disii',
            'link_iklan.required' => 'Wajib Disii',
            'gambar_iklan.required' => 'Wajib Disii',
        ]);

        //upload gambar/foto
        $file = Request()->gambar_iklan;
        $fileName = Request()->nama_iklan . '.' . $file->extension();
        $file->move(public_path().'/gambar_iklan', $fileName );

        $data = [
            'link_iklan' => Request()->link_iklan,
            'nama_iklan' => Request()->nama_iklan,
            'gambar_iklan' => $fileName,
        ];

        $this->ModelIklan->addData($data);
        return redirect()->route('iklan')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    public function detail($id_iklan)
    {
        $data = [
            'iklan' => $this->ModelIklan->detailData($id_iklan),
        ];
        return view('iklan.detail', $data)->with([
            'user' => Auth::user()
        ]);
    }

    public function edit($id_iklan)
    {
        $data = [
            'iklan' => $this->ModelIklan->detailData($id_iklan),
        ];

        return view('iklan.edit', $data )->with([
            'user' => Auth::user()
        ]);
    }

    public function update($id_iklan)
    {
        Request()->validate([
            'link_iklan' => 'required',
            'nama_iklan' => 'required',
            'gambar_iklan' => 'mimes:jpg,jpeg,bmp,png',
        ], [
            'link_iklan.required' => 'Wajib Disii',
            'nama_iklan.required' => 'Wajib Disii',
        ]);

        if (Request()->gambar_iklan <> "") {
            //jika ingin ganti foto
            $file = Request()->gambar_iklan;
            $fileName = Request()->nama_iklan . '.' . $file->extension();
            $file->move(public_path().'/gambar_iklan', $fileName );

            $data = [
                'link_iklan' => Request()->link_iklan,
                'nama_iklan' => Request()->nama_iklan,
                'gambar_iklan' => $fileName,
        ];

            $this->ModelIklan->editData($id_iklan, $data);

        }else {
            //jika tidak ingin ganti foto
            $data = [
                'link_iklan' => Request()->link_iklan,
                'nama_iklan' => Request()->nama_iklan,
            ];
            
            $this->ModelIklan->editData($id_iklan, $data);
        }

        return redirect()->route('iklan')->with('pesan', 'Data Berhasil di Update');
    }

    public function delete($id_iklan)
    {
        $this->ModelIklan->deleteData($id_iklan);
        return redirect()->route('iklan')->with('pesan', 'Data Berhasil di Hapus');
    }
}
