@extends('frontend.main')
@section('main')

<div class="col-lg-12 mb-3">
    @foreach ($iklan as $data)
    <a href="{{ $data->link_iklan }}" class="d-block w-100 text-white text-decoration-none mb-3"><img
            class="img-fluid w-100" src="{{ url('gambar_iklan/'.$data->gambar_iklan) }}" alt=""></a>
    @endforeach
</div>

<!-- News With Sidebar Start -->
<div class="col-12">
    <div class="section-title">
        <h4 class="m-0 text-uppercase font-weight-bold">Kategori: </h4>
    </div>
</div>

@foreach ($artikel as $data)
<div class="col-lg-6">
    <div class="position-relative mb-3">
        <img class="img-fluid w-100" src="{{ url('gambar_artikel/'.$data->gambar_artikel) }}" style="object-fit: cover;">
        <div class="bg-white border border-top-0 p-4">
            <div class="mb-2">
                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                    href="">{{ $data->nama_kategori }}</a>
                <a class="text-body" href=""><small>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</small></a>
            </div>
            <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold"
                href="/frontend/artikel/detail/{{ $data->id_artikel }}">{{ Str::limit($data->judul_artikel, '40', '...') }}</a>
        </div>
        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
            
        </div>
    </div>
</div>
@endforeach

<div class="col-lg-12 mb-3">
    @foreach ($iklan as $data)
    <a href="{{ $data->link_iklan }}" class="d-block w-100 text-white text-decoration-none mb-3"><img
            class="img-fluid w-100" src="{{ url('gambar_iklan/'.$data->gambar_iklan) }}" alt=""></a>
    @endforeach
</div>

<div class="col-lg-12 mb-3">
    <div class="float-right">
        {{ $artikel->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection