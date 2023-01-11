@extends('frontend.main')
@section('main')

<!-- News Detail Start -->
<div class="position-relative mb-3">
    <img class="img-fluid w-100" src="{{ url('gambar_artikel/'.$artikel->gambar_artikel) }}" style="object-fit: cover;">
    <div class="bg-white border border-top-0 p-4">
        <div class="mb-3">
            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                href="">{{ $artikel->nama_kategori }}</a>
            <a class="text-body" href="">{{ \Carbon\Carbon::parse($artikel->created_at)->diffForHumans() }}</a>
        </div>
        <h2 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $artikel->judul_artikel }}</h2>
        <p>{!!$artikel->deskripsi_artikel!!}</p>
    </div>
    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
        <div class="d-flex align-items-center">
            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
            <span>John Doe</span>
        </div>
        <div class="d-flex align-items-center">
            <span class="ml-3"><i class="far fa-eye mr-2"></i>{{ $artikel->views }}</span>
            <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
        </div>
    </div>
</div>
<!-- News Detail End -->

<div class="col-lg-12 mb-3">
    @foreach ($iklan as $data)
    <a href="{{ $data->link_iklan }}" class="d-block w-100 text-white text-decoration-none mb-3"><img
            class="img-fluid w-100" src="{{ url('gambar_iklan/'.$data->gambar_iklan) }}" alt=""></a>
    @endforeach
</div>

<!-- Comment List Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
    </div>
    <div class="bg-white border border-top-0 p-4">
        <div class="media mb-4">
            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
            <div class="media-body">
                <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan
                            2045</i></small></h6>
                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                </p>
                <button class="btn btn-sm btn-outline-secondary">Reply</button>
            </div>
        </div>
        <div class="media">
            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
            <div class="media-body">
                <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan
                            2045</i></small></h6>
                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                </p>
                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                <div class="media mt-4">
                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                    <div class="media-body">
                        <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01
                                    Jan 2045</i></small></h6>
                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                            labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                            eirmod ipsum.</p>
                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Comment List End -->

<!-- Comment Form Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Tinggalkan Komentar</h4>
    </div>
    <div class="bg-white border border-top-0 p-4">
        <form>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Kirim" class="btn btn-primary font-weight-semi-bold py-2 px-3">
            </div>
        </form>
    </div>
</div>
<!-- Comment Form End -->
@endsection