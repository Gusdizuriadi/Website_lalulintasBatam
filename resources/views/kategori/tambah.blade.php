@extends('layout.main')

@section('judul')
Tambah Kategori
@endsection

@section('isi')
<form action="/kategori/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" value="{{ old('nama_kategori') }}">
                        @error ('nama_kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                        <a href="/kategori" class="btn btn-sm btn-secondary">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection