@extends('layout.main')

@section('judul')
Tambah Artikel
@endsection

@section('isi')

<form action="{{ url('artikel/insert') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Artikel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-7">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <textarea name="judul_artikel"
                                class="form-control @error('judul_artikel') is-invalid @enderror"
                                value="{{ old('judul_artikel') }}"></textarea>
                            @error ('judul_artikel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Tanggal Posting</label>
                            <input name="tanggal_posting" type="date"
                                class="form-control @error('tanggal_posting') is-invalid @enderror"
                                value="{{ old('tanggal_posting') }}">
                            @error ('tanggal_posting')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-7">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Isi Artikel</label>
                            <textarea name="deskripsi_artikel" id="summernote"
                                class="form-control @error('deskripsi_artikel') is-invalid @enderror"
                                value="{{ old('deskripsi_artikel') }}"></textarea>
                            @error ('deskripsi_artikel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <!-- select -->
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror"
                                value="{{ old('id_kategori') }}">
                                <option value="">- Pilih -</option>
                                <option value=""></option>
                            </select>
                            @error ('id_kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Pelanggaran</label>
                            <select name="id_jenis" class="form-control @error('id_jenis') is-invalid @enderror"
                                value="{{ old('id_jenis') }}">
                                <option value="">- Pilih -</option>
                                <option></option>
                            </select>
                            @error ('id_jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Gambar Artikel</label>
                            <input name="gambar_artikel" type="file"
                                class="form-control @error('gambar_artikel') is-invalid @enderror"
                                value="{{ old('gambar_artikel') }}">
                            @error ('gambar_artikel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('artikel') }}" class=" btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i>
                        Batal</a>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection