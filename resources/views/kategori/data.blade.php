@extends('layout.main')

@section('judul')
Halaman Kategori
@endsection

@section('isi')
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/kategori/tambah" class="btn btn-sm btn-primary">Tambah Data</a>
            @if (session('Pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses</h5>
                {{ session('Pesan') }}.
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 30px">No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($kategori as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection