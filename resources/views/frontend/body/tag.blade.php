<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        <div class="d-flex flex-wrap m-n1">
            @foreach ($tag as $data)
            <a href="/frontend/artikel/artikel_tag/{{$data->id_tag}}" class="btn btn-sm btn-outline-secondary m-1">{{ $data->nama_tag }}</a>
            @endforeach
        </div>
    </div>
</div>