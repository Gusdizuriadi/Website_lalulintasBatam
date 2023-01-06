@if($user->level == 1)

<li class="nav-item menu-is-opening menu-open">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-header">DATA MASTER</li>
<li class="nav-item">
    <a href="{{ url('kategori') }}" class="nav-link">
        <i class="nav-icon fas fa-tags"></i>
        <p>
            Kategori
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('tag') }}" class="nav-link">
        <i class="nav-icon fas fa-tags"></i>
        <p>
            Tags
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('jenisBerita') }}" class="nav-link">
        <i class="nav-icon far fa-newspaper"></i>
        <p>
            Jenis Berita
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('jenis') }}" class="nav-link">
        <i class="nav-icon fas fa-car-crash"></i>
        <p>
            Jenis Pelanggaran
        </p>
    </a>
</li>

<li class="nav-header">DATA PROSES</li>
<li class="nav-item">
    <a href="{{ url('artikel') }}" class="nav-link">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>
            Berita
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('profil') }}" class="nav-link">
        <i class="nav-icon fas fa-landmark"></i>
        <p>
            Profil
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('user') }}" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
            User
        </p>
    </a>
</li>

<li class="nav-header">SETTING</li>
<li class="nav-item">
    <a href="{{ url('iklan') }}" class="nav-link">
        <i class="nav-icon fab fa-adversal"></i>
        <p>
            Iklan
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('sosialMedia') }}" class="nav-link">
        <i class="nav-icon fas fa-globe-asia"></i>
        <p>
            Sosial Media
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('') }}" class="nav-link">
        <i class="nav-icon far fa-images"></i>
        <p>
            Slide Banner
        </p>
    </a>
</li>

@endif

@if($user->level == 2)

<li class="nav-item menu-is-opening menu-open">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-header">DATA PROSES</li>
<li class="nav-item">
    <a href="{{ url('artikel') }}" class="nav-link">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>
            Artikel
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('profil') }}" class="nav-link">
        <i class="nav-icon fas fa-landmark"></i>
        <p>
            Profil
        </p>
    </a>
</li>
@endif