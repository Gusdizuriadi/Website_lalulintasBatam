@extends('layout.main')

@section('judul')
Halaman Kelola Profil
@endsection

@section('isi')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Profil</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="pull-right mb-3">
                <a href="{{ url('profil/tambah') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah
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
                        <th>Nama Profil</th>
                        <th>Deskripsi Profil</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Gambar</th>
                        <th width="250px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($profil as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_profil }}</td>
                        <td style="text-align: justify;">{{ $data->deskripsi_profil }}</td>
                        <td style="text-align: justify;">{{ $data->visi }}</td>
                        <td style="text-align: justify;">{{ $data->misi }}</td>
                        <td> <img src="{{ url('gambar_profil/'.$data->gambar_profil) }}" width="150px"> </td>
                        <td>
                            <a href="/profil/detail/{{ $data->id_profil }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-eye"></i> Detail</a>
                            <a href="/profil/edit/{{ $data->id_profil }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#delete{{ $data->id_profil }}"><i class=" fas fa-trash"></i>
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

@foreach ($profil as $data)
<div class="modal fade" id="delete{{ $data->id_profil }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->nama_profil }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <a href="/profil/delete/{{ $data->id_profil }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach

@endsection