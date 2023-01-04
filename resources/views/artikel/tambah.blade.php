@extends('layout.main')

@section('judul')
Tambah Berita
@endsection

@section('isi')

<form action="{{ url('artikel/insert') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Berita</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Judul Berita</label>
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

                    <div class="col-sm-4">
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
                    <div class="col-sm-8">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Isi Berita</label>
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

                    <div class="col-sm-4">
                        <!-- select -->
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror"
                                value="">
                                <option value="">- Pilih -</option>
                                @foreach ($kategori as $item)
                                <option value="{{ $item->id_kategori }}" {{ old('kategori_id') == $item->id_kategori ? 'selected' : null }} >{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error ('kategori_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tags</label>
                            <select name="tag_id" class="form-control @error('tag_id') is-invalid @enderror"
                                value="">
                                <option value="">- Pilih -</option>
                                @foreach ($tag as $item)
                                <option value="{{ $item->id_tag }}" {{ old('tag_id') == $item->id_tag ? 'selected' : null }} >{{ $item->nama_tag }}</option>
                                @endforeach
                            </select>
                            @error ('tag_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Berita</label>
                            <select name="jenis_berita_id" class="form-control @error('jenis_berita_id') is-invalid @enderror"
                                value="{{ old('jenis_berita_id') }}">
                                <option value="">- Pilih -</option>
                                @foreach ($jenisBerita as $item)
                                <option value="{{ $item->id_jenis_berita }}" {{ old('jenis_berita_id') == $item->id_jenis_berita ? 'selected' : null }} >{{ $item->nama_jenis_berita }}</option>
                                @endforeach
                            </select>
                            @error ('jenis_berita_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Pelanggaran</label>
                            <select name="jenis_id" class="form-control @error('jenis_id') is-invalid @enderror"
                                value="{{ old('jenis_id') }}">
                                <option value="">- Pilih -</option>
                                @foreach ($jenis as $item)
                                <option value="{{ $item->id_jenis }}" {{ old('jenis_id') == $item->id_jenis ? 'selected' : null }} >{{ $item->nama_jenis }}</option>
                                @endforeach
                            </select>
                            @error ('jenis_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Gambar Berita</label>
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