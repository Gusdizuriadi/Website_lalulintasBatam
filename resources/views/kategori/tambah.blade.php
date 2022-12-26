@extends('layout.main')

@section('judul')
Tambah Kategori
@endsection

@section('isi')
<section class="content">
    <form action="{{ url('kategori/insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Kategori</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input name="nama_kategori"
                                    class="form-control @error('nama_kategori') is-invalid @enderror"
                                    value="{{ old('nama_kategori') }}">
                                @error ('nama_kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                            <a href="{{ url('kategori') }}" class=" btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i> Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection