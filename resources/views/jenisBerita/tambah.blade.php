@extends('layout.main')

@section('judul')
Tambah Jenis Berita
@endsection

@section('isi')
<section class="content">
    <form action="{{ url('jenisBerita/insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Jenis Berita</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Jenis Berita</label>
                                <input name="nama_jenis_berita"
                                    class="form-control @error('nama_jenis_berita') is-invalid @enderror"
                                    value="{{ old('nama_jenis_berita') }}">
                                @error ('nama_jenis_berita')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                            <a href="{{ url('jenisBerita') }}" class=" btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i> Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection