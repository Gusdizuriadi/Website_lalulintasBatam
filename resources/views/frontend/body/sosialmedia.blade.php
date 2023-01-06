<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Ikuti Kami</h4>
    </div>

    <div class="bg-white border border-top-0 p-3">
        @foreach ($sosialMedia as $data)
        <a href="{{ $data->link_sosmed }}" class="d-block w-100 text-white text-decoration-none mb-3"
            style="background: #20B2AA;">
            <i class="fas fa-globe-asia text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
            <span class="font-weight-medium">{{ $data->nama_sosmed }}</span>
        </a>
        @endforeach
    </div>
</div>