@extends('layout.main')

@section('judul')
Tambah Sosial Media
@endsection

@section('isi')

<form action="{{ url('sosialMedia/insert') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Sosial Media</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Sosial Media</label>
                            <input name="nama_sosmed" class="form-control @error('nama_sosmed') is-invalid @enderror"
                                value="{{ old('nama_sosmed') }}"></input>
                            @error ('nama_sosmed')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Link Sosial Media</label>
                            <textarea name="link_sosmed" type="text"
                                class="form-control @error('link_sosmed') is-invalid @enderror"
                                value="{{ old('link_sosmed') }}"></textarea>
                            @error ('link_sosmed')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('sosialMedia') }}" class=" btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i>
                        Batal</a>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection