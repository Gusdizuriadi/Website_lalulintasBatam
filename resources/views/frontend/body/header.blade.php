<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">Lalulintasbatam.com</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="active" href="index.html">Beranda</a></li>
                <li><a href="about.html">Profil</a></li>
                <li><a href="events.html">Jenis Pelanggaran</a></li>
                <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach ($kategori as $kat)
                        <li><a href="#">{{ $kat->nama_kategori }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="contact.html">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>