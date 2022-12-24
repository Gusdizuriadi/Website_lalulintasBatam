@extends('layout.main')

@section('judul')
Edit Kategori
@endsection

@section('isi')
<section class="content">
    <form action="/kategori/update/{{ $kategori->id_kategori }}" method="POST" enctype="multipart/formdata">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Kategori</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input name="nama_kategori"
                                    class="form-control @error('nama_kategori') is-invalid @enderror"
                                    value="{{ $kategori->nama_kategori}}">
                                @error ('nama_kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <a href="{{ url('kategori') }}" class=" btn btn-sm btn-secondary">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection