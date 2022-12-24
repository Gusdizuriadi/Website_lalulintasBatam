@extends('layout.main')

@section('judul')
Edit Jenis
@endsection

@section('isi')
<section class="content">
    <form action="/jenis/update/{{ $jenis->id_jenis }}" method="POST" enctype="multipart/formdata">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data jenis Pelanggaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama jenis</label>
                                <input name="nama_jenis"
                                    class="form-control @error('nama_jenis') is-invalid @enderror"
                                    value="{{ $jenis->nama_jenis}}">
                                @error ('nama_jenis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <a href="{{ url('jenis') }}" class=" btn btn-sm btn-secondary">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection