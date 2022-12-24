@extends('layout.main')

@section('judul')
Tambah Jenis
@endsection

@section('isi')
<section class="content">
    <form action="{{ url('jenis/insert') }}" method="POST" enctype="multipart/formdata">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Jenis Pelanggaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Jenis</label>
                                <input name="nama_jenis"
                                    class="form-control @error('nama_jenis') is-invalid @enderror"
                                    value="{{ old('nama_jenis') }}">
                                @error ('nama_jenis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                            <a href="{{ url('jenis') }}" class=" btn btn-sm btn-secondary">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection