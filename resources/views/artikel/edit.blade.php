@extends('layout.main')

@section('judul')
Edit Artikel
@endsection

@section('isi')

<form action="/artikel/update/{{ $artikel->id_artikel }}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Artikel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <textarea name="judul_artikel"
                                class="form-control @error('judul_artikel') is-invalid @enderror"
                                value="{{ $artikel->id_artikel }}">{{ $artikel->judul_artikel }}</textarea>
                            @error ('judul_artikel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tanggal Posting</label>
                            <input name="tanggal_posting" type="date"
                                class="form-control @error('tanggal_posting') is-invalid @enderror"
                                value="{{ $artikel->tanggal_posting }}">
                            @error ('tanggal_posting')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Isi Artikel</label>
                            <textarea name="deskripsi_artikel" id="summernote"
                                class="form-control @error('deskripsi_artikel') is-invalid @enderror"
                                value="{{ $artikel->id_artikel }}">{{ $artikel->deskripsi_artikel }}</textarea>
                            @error ('deskripsi_artikel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <!-- select -->
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror"
                                value="{{ $artikel->id_kategori }}">
                                @foreach ($kategori as $item)
                                <option value="{{ $item->id_kategori }}" {{ $item->id_kategori == $artikel->kategori_id  ? 'selected' : '' }}>
                                    {{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error ('kategori_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Pelanggaran</label>
                            <select name="jenis_id" class="form-control @error('jenis_id') is-invalid @enderror"
                                value="{{ $artikel->id_jenis }}">
                                @foreach ($jenis as $item)
                                <option value="{{ $item->id_jenis }}" {{ $item->id_jenis == $artikel->jenis_id  ? 'selected' : '' }}>
                                    {{ $item->nama_jenis }}</option>
                                @endforeach
                            </select>
                            @error ('jenis_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Ganti Gambar Artikel</label>
                            <input name="gambar_artikel" type="file"
                                class="form-control @error('gambar_artikel') is-invalid @enderror"
                                value="{{ old('gambar_artikel') }}">
                            @error ('gambar_artikel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <img src="{{ url('gambar_artikel/'.$artikel->gambar_artikel) }}" width="365px">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('artikel') }}" class=" btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i>
                        Batal</a>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection