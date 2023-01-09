<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center bg-dark px-lg-5">
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-n2">
                    <li class="nav-item">
                        <a class="nav-link text-body small" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                <h1 class="m-0 display-5 text-uppercase text-primary">Lalulintasbatam<span
                        class="text-secondary font-weight-normal">.com</span></h1>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-uppercase text-primary">Lalulintasbatam<span
                    class="text-white font-weight-normal">.com</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{ url('beranda') }}" class="nav-item nav-link {{ request()->is('beranda') ? 'active' : '' }}">Beranda</a>
                <a href="#" class="nav-item nav-link">Profil</a>
                <a href="category.html" class="nav-item nav-link">Jenis Pelanggaran</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach ($kategori as $data)
                        <a href="/frontend/artikel/artikel_kategori/{{$data->nama_kategori}}" class="dropdown-item">{{ $data->nama_kategori }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Kontak</a>
            </div>
            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" placeholder="Pencarian Cepat">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>