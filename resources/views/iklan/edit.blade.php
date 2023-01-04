@extends('layout.main')

@section('judul')
Edit Iklan
@endsection

@section('isi')

<form action="/iklan/update/{{ $iklan->id_iklan }}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="content">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Iklan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama iklan</label>
                            <input name="nama_iklan" class="form-control @error('nama_iklan') is-invalid @enderror"
                                value="{{ $iklan->nama_iklan }}"></input>
                            @error ('nama_iklan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Gambar iklan</label>
                            <input name="gambar_iklan" type="file"
                                class="form-control @error('gambar_iklan') is-invalid @enderror"
                                value="{{ old('gambar_iklan') }}">
                            @error ('gambar_iklan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <img src="{{ url('gambar_iklan/'.$iklan->gambar_iklan) }}" width="365px">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>link iklan</label>
                            <textarea name="link_iklan" class="form-control @error('link_iklan') is-invalid @enderror"
                                value="{{ $iklan->id_iklan }}">{{ $iklan->link_iklan }}</textarea>
                            @error ('link_iklan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <a href="{{ url('iklan') }}" class=" btn btn-sm btn-secondary"><i class="fas fa-times-circle"></i>
                        Batal</a>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection