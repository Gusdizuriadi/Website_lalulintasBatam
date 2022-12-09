@if($user->level == 1)
<li class="nav-header">DATA MASTER</li>
<li class="nav-item">
    <a href="{{ url('kategori') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Kategori
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('jenis') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Jenis
        </p>
    </a>
</li>

<li class="nav-header">DATA PROSES</li>
<li class="nav-item">
    <a href="{{ url('artikel') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Artikel
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('profil') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Profil
        </p>
    </a>
</li>
@endif

@if($user->level == 2)
<li class="nav-header">DATA PROSES</li>
<li class="nav-item">
    <a href="{{ url('artikel') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Artikel
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('profil') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Profil
        </p>
    </a>
</li>
@endif