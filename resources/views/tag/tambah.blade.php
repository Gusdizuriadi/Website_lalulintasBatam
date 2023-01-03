@extends('layout.main')

@section('judul')
Tambah Tag
@endsection

@section('isi')
<section class="content">
    <form action="{{ url('tag/insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Tag</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama tag</label>
                                <input name="nama_tag"
                                    class="form-control @error('nama_tag') is-invalid @enderror"
                                    value="{{ old('nama_tag') }}">
                                @error ('nama_tag')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                            <a href="{{ url('tag') }}" class=" btn btn-sm btn-secondary"><i
                                    class="fas fa-times-circle"></i> Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection