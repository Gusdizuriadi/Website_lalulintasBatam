<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Berita Populer</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        @if($populer_artikel)
        @foreach($populer_artikel as $data)
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-fluid" src="{{ url('gambar_artikel/'.$data->gambar_artikel) }}" alt="" style="width: 110px; height: 110px">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="/frontend/artikel/detail/{{ $data->id_artikel }}">{{ Str::limit($data->judul_artikel, '18', '...') }}</a>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>