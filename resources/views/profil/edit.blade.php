@extends('layout.main')

@section('judul')
Tambah Profil
@endsection

@section('isi')

<form action="/profil/update/{{ $profil->id_profil }}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Profil</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Profil</label>
                            <textarea name="nama_profil" class="form-control @error('nama_profil') is-invalid @enderror"
                                value="{{ $profil->id_profil }}">{{ $profil->nama_profil }}</textarea>
                            @error ('nama_profil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi_profil"
                                class="form-control @error('deskripsi_profil') is-invalid @enderror"
                                value="{{ $profil->id_profil }}">{{ $profil->deskripsi_profil }}</textarea>
                            @error ('deskripsi_profil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Visi</label>
                            <textarea name="visi" type="text" class="form-control @error('visi') is-invalid @enderror"
                                value="{{ $profil->id_profil }}">{{ $profil->visi }}</textarea>
                            @error ('visi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Misi</label>
                            <textarea name="misi" type="text" class="form-control @error('misi') is-invalid @enderror"
                                value="{{ $profil->id_profil }}">{{ $profil->misi }}</textarea>
                            @error ('misi')
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
                            <label>Gambar profil</label>
                            <input name="gambar_profil" type="file"
                                class="form-control @error('gambar_profil') is-invalid @enderror"
                                value="{{ old('gambar_profil') }}">
                            @error ('gambar_profil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <img src="{{ url('gambar_profil/'.$profil->gambar_profil) }}" width="365px">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('profil') }}" class=" btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i>
                        Batal</a>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection