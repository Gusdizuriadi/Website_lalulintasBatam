@extends('layout.main')

@section('judul')
Detail Profil
@endsection

@section('isi')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img src="{{ url('gambar_profil/'.$profil->gambar_profil) }}" width="300px">
                        </div>

                        <h3 class="profile-username text-center">{{ $profil->nama_profil }}</h3>

                        <p class="text-muted text-center">Deskripsi</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>{{ $profil->deskripsi_profil }}</b>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->

            <!-- About Me Box -->
            <div class="card card-primary card-outline col-md-6">
                <div class="card-header">
                    <h3 class="fas fa-book mr-1"> Visi & Misi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <p class="text-muted">{!!$profil->visi_misi!!}</p>
                    <hr>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
</section>

@endsection