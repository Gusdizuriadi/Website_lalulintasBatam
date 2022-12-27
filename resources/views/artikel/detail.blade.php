@extends('layout.main')

@section('judul')
Detail Artikel
@endsection

@section('isi')

<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="col-12">
                        <img src="{{ url('gambar_artikel/'.$artikel->gambar_artikel) }}" class="product-image"
                            alt="Product Image">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">{{ $artikel->judul_artikel }}</h3>
                    <span class="description"><i class="fas fa-calendar-alt"></i> {{ $artikel->tanggal_posting }}</span>
                    <div class="mt-4">
                        <div class="btn btn-info btn-lg btn-flat">
                            <i class="fas fa-tags fa-lg mr-2"></i>
                            {{ $artikel->nama_kategori }}
                        </div>

                        <div class="btn btn-default btn-lg btn-flat">
                            <i class="fas fa-car-crash fa-lg mr-2"></i>
                            {{ $artikel->nama_jenis }}
                        </div>
                    </div>

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-instagram-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Isi Artikel</a>
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab" style="text-align: justify;">
                        {{ $artikel->deskripsi_artikel }}
                    </div>
                </div>

                <div class="form-group">
                    <a href="{{ url('artikel') }}" class=" btn btn-sm btn-secondary"><i
                            class="fas fa-arrow-circle-left"></i>
                        Kembali</a>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

</section>

@endsection