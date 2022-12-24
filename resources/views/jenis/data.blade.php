@extends('layout.main')

@section('judul')
Halaman Kelola Jenis Pelanggaran
@endsection

@section('isi')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Jenis Pelanggaran</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ url('jenis/tambah') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
            @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>Sukses</h5>
                {{ session('pesan') }}.
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 30px">No</th>
                        <th>Nama Jenis Pelanggaran</th>
                        <th width="160px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($jenis as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_jenis }}</td>
                        <td>
                            <a href="/jenis/edit/{{ $data->id_jenis }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i >Edit</a>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#delete{{ $data->id_jenis }}"><i class="fas fa-trash"></i>
                                Hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach ($jenis as $data)
<div class="modal fade" id="delete{{ $data->id_jenis }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->nama_jenis }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <a href="/jenis/delete/{{ $data->id_jenis }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach

@endsection