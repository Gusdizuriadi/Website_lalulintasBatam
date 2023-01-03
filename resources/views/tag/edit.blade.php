@extends('layout.main')

@section('judul')
Edit Tag
@endsection

@section('isi')
<section class="content">
    <form action="/tag/update/{{ $tag->id_tag }}" method="POST" enctype="multipart/formdata">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Tag</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama tag</label>
                                <input name="nama_tag"
                                    class="form-control @error('nama_tag') is-invalid @enderror"
                                    value="{{ $tag->nama_tag}}">
                                @error ('nama_tag')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <a href="{{ url('tag') }}" class=" btn btn-sm btn-secondary">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection