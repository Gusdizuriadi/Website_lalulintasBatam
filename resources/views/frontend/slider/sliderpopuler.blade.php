<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Berita Populer</h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            @foreach ($artikel as $data)
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="{{ url('gambar_artikel/'.$data->gambar_artikel) }}"
                    style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="/frontend/artikel/artikel_kategori/{{$data->nama_kategori}}">{{ $data->nama_kategori }}</a>
                        <a class="text-white"
                            href=""><small>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                        href="/frontend/artikel/detail/{{ $data->id_artikel }}">Lorem ipsum dolor sit
                        amet elit...</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>