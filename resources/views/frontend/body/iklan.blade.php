<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Iklan</h4>
    </div>
    <div class="bg-white text-center border border-top-0 p-3">
        @foreach ($iklan as $data)
        <a href="{{ $data->link_iklan }}" class="d-block w-100 text-white text-decoration-none mb-3"><img
                class="img-fluid" src="{{ url('gambar_iklan/'.$data->gambar_iklan) }}" alt=""></a>
        @endforeach
    </div>
</div>