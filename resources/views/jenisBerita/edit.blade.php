@extends('layout.main')

@section('judul')
Edit Jenis Berita
@endsection

@section('isi')
<section class="content">
    <form action="/jenisBerita/update/{{ $jenisBerita->id_jenis_berita }}" method="POST" enctype="multipart/formdata">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data jenis Berita</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama jenis Berita</label>
                                <input name="nama_jenis_berita"
                                    class="form-control @error('nama_jenis_berita') is-invalid @enderror"
                                    value="{{ $jenisBerita->nama_jenis_berita}}">
                                @error ('nama_jenis_berita')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <a href="{{ url('jenisBerita') }}" class=" btn btn-sm btn-secondary">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection