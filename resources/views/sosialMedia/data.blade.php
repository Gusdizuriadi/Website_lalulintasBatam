@extends('layout.main')

@section('judul')
Halaman Kelola Sosial Media
@endsection

@section('isi')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Sosial Media</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="pull-right mb-3">
                <a href="{{ url('sosialMedia/tambah') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah
                    Data</a>
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
                        <th>No</th>
                        <th>Link Sosial Media</th>
                        <th>Nama Sosial Media</th>
                        <th width="170px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($sosialMedia as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->link_sosmed }}</td>
                        <td>{{ $data->nama_sosmed }}</td>
                        <td>
                            <a href="/sosialMedia/edit/{{ $data->id_sosmed }}" class="btn btn-sm btn-warning"><i
                                    class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#delete{{ $data->id_sosmed }}"><i class=" fas fa-trash"></i>
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

@foreach ($sosialMedia as $data)
<div class="modal fade" id="delete{{ $data->id_sosmed }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->link_sosmed }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <a href="/sosialMedia/delete/{{ $data->id_sosmed }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach

@endsection