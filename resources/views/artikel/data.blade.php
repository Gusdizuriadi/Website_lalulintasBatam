@extends('layout.main')

@section('judul')
Halaman Kelola Berita
@endsection

@section('isi')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Berita</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <a href="{{ url('artikel/tambah') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>
                        Tambah Data</a>
                    <div id="" class="float-right mb-3">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>Sukses</h5>
                        {{ session('pesan') }}.
                    </div>
                    @endif
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Berita</th>
                                <th>Date</th>
                                <th>Kategori</th>
                                <th>Jenis Berita</th>
                                <th>Tags</th>
                                <th>Jenis Pelanggaran</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th width="100px">Views</th>
                                <th width="240px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($artikel as $key => $data)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{ $artikel->firstItem() + $key }}</td>
                                <td>{{ Str::limit($data->judul_artikel, '40', '...') }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->nama_jenis_berita }}</td>
                                <td>{{ $data->nama_tag}}</td>
                                <td>{{ $data->nama_jenis }}</td>
                                <td><img src="{{ url('gambar_artikel/'.$data->gambar_artikel) }}" width="150px"></td>
                                <td><span
                                        class="badge {{ ($data->status == 1) ? 'badge-success' : 'badge-secondary' }}">{{ ($data->status == 1 ? 'Aktif' : 'Non-Aktif') }}</span>
                                </td>
                                <td><span><i class="far fa-eye mr-2"></i></span>{{ $data->views }}</td>
                                <td>
                                    <a href="/artikel/detail/{{ $data->id_artikel }}" class="btn btn-sm btn-info"><i
                                            class="fas fa-eye"></i> Detail</a>
                                    <a href="/artikel/edit/{{ $data->id_artikel }}" class="btn btn-sm btn-warning"><i
                                            class="fas fa-edit"></i> Edit</a>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#delete{{ $data->id_artikel }}"><i class=" fas fa-trash"></i>
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr class="expandable-body">
                                <td colspan="10">
                                    <p>
                                        <b>Isi Berita :</b> {!!$data->deskripsi_artikel!!}
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        Showing {{ $artikel->firstItem() }} to {{ $artikel->lastItem() }} of {{ $artikel->total() }}
                        entries
                    </div>
                    <d class="float-right">
                        {{ $artikel->links('pagination::bootstrap-4') }}
                    </d>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /.row -->

@foreach ($artikel as $data)
<div class="modal fade" id="delete{{ $data->id_artikel }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->judul_artikel }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <a href="/artikel/delete/{{ $data->id_artikel }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach

@endsection