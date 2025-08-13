@extends('layouts.layouts')

@section('content')
    
    <section id="hero" class="px-0">
    <div class="container text-center text-white">
        <div class="hero-title" data-aos="fade-up">
            <div class="hero-text">
            <span class="hero-text-arab">أهلاً وسهلاً</span>
            <br> Selamat Datang <br>di  <span class="gold-white-text">PonPes Modern Hidayatullah</span>
        </div>
            <h4>Mencetak generasi muslim berwawasan tradisional dan kontemporer</h4>
        </div>
    </div>
</section>

    <section id="program" style="margin-top: -30px;">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <a href="{{ url('/kurikulum-pesantren') }}" class="text-decoration-none">
                    <div class="box-link bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                <div>
                    <p class="mb-0 text-dark fw-bold">Kurikulum <br> Pesantren</p>
                </div>
                    <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
                </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <a href="{{ url('/jurnal-kegiatan') }}" class="text-decoration-none">
                    <div class="box-link bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                <div>
                    <p class="mb-0 text-dark fw-bold">Jurnal <br> Harian MI</p>
                </div>
                    <img src="{{ asset('assets/images/jurnal1.png') }}" height="60" width="60" alt="">
                </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <a href="{{ url('/jurnal-mts') }}" class="text-decoration-none">
                    <div class="box-link bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                <div>
                    <p class="mb-0 text-dark fw-bold">Jurnal <br> Harian MTS</p>
                </div>
                    <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
                </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <a href="{{ url('/pesertadidik') }}" class="text-decoration-none">
                    <div class="box-link bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                <div>
                    <p class="mb-0 text-dark fw-bold">Peserta <br> Didik</p>
                </div>
                    <img src="{{ asset('assets/images/pesertadidik1.png') }}" height="55" width="55" alt="">
                </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- Berita -->
<section id="berita" class="py-5">
    <div class="container ">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
        </div>

        <div class="row py-5" data-aos="flip-up">
            @foreach ($artikels as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/artikel/'. $item->image) }}" class="img-fluid" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#pesantrenmodernHidayatullah</p>
                        <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

        <div class="footer-berita text-center">
            <a href="/berita" class="btn btn-outline-success">Berita Lainya</a>
        </div>
    </div>
</section>
<!-- Berita -->

<!-- join -->
<section id ="join" class="py-5" data-aos="flip-down">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
            <div class="d-flex align-items-center mb-3">
                <div class="stripe me-2"></div>
                    <h5>Daftar Santri</h5>
            </div>
            <h1 class="fw-bold mb-2">Gabung Bersama Kami Menjadi Generasi Nahdiyin</h1>
            <p class="mb-3">Pondok Pesantren Hidayatullah merupakan pesantren terbaik di Jawa Timur dengan meluluskan santri menjadi ustadz terkemuka mendakwahkan di pelosok nusantara</p>
            <a href="https://wa.me/6285735437187?text=Halo%20saya%20ingin%20daftar" target="_blank" class="btn btn-outline-success">
  Daftar Sekarang
</a>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('assets/images/pp1.png') }}" class="img-fluid" alt="">
        </div>
    </div>
    </div>
</section>
<!-- join -->

<!-- Vidio -->
<section id="video" class="py-5" data-aos="zoom-in">
    <div class="container py-5">
        <div class="text-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mksnO7n_I0Y?si=VCYBQoJzehaJwolg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>



<section id="video_youtube" class="py-5" data-aos="zoom-in">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Video Kegiatan Pondok Pesantren</h2>
        </div>

        <div class="row py-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
    <blockquote class="instagram-media"
        data-instgrm-permalink="https://www.instagram.com/reel/DMpMVXTSrOQ/?utm_source=ig_embed&amp;utm_campaign=loading"
        data-instgrm-version="14"
        style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:100%;">
    </blockquote>
</div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <blockquote class="instagram-media" 
                    data-instgrm-permalink="https://www.instagram.com/reel/DMkf4qjhlrr/?utm_source=ig_embed&amp;utm_campaign=loading" 
                    data-instgrm-version="14" 
                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%;">
                </blockquote>
            </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <blockquote class="instagram-media"
                data-instgrm-permalink="https://www.instagram.com/reel/DMlB2YryJfF/?utm_source=ig_embed&amp;utm_campaign=loading"
                data-instgrm-version="14"
                style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px rgba(0,0,0,0.5),0 1px 10px rgba(0,0,0,0.15);
                margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%;">
                </blockquote>
            </div>
        </div>

        <div class="footer-berita text-center">
            <a href="https://www.youtube.com/@PonpesModernHidayatullah" class="btn btn-outline-success">Vidio Lainya</a>
        </div>
    </div>
</section>
<!-- Vidio -->

<!-- Foto dan Fasilitas -->
<section id="foto" class="section-foto parallax" data-aos="zoom-in-up">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold" style="color: #ffffffff;">Foto Kegiatan</h5>
            </div>
        <div>
                <a href="/foto" class="btn btn-outline-success text-white">Foto Lainya</a>
            </div>
        </div>

        <div class="row ">
            @foreach($photos as $photo)
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                    <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="">
                </a>
                <p>{{ $photo->judul }}</p>
            </div>
            @endforeach
            
        </div>
    </div>
</section>

<section id="fasilitas" class="py-5" data-aos="zoom-in-up">
        <div id="fasilitasCarousel" class="carousel slide py-5 mx-auto" style="max-width: 1000px;" data-bs-ride="carousel">
        <div class="header-berita text-center" style="margin-top: -60px; margin-bottom: 30px;">
    <h2 class="fw-bold">Fasilitas Pondok Pesantren</h2>
</div>
    <div class="carousel-inner" >
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('assets/icons/fasilitas1.jpg') }}" class="d-block w-100" alt="Fasilitas 1">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Area Parkir </h5>
                <p class="text-gradient-gold-white">Tempat untuk parkir kendaraan para santri</p>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas2.jpg') }}" class="d-block w-100" alt="Fasilitas 2">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Gazebo</h5>
                <p class="text-gradient-gold-white">Gazebo untuk tempat istirahat maupun pembelajaran para santri.</p>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas3.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Tempat Makan</h5>
                <p class="text-gradient-gold-white">Fasilitas untuk makan bersama para santri.</p>
            </div>
        </div>
        <!-- Slide 4 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas4.jpg') }}" class="d-block w-100" alt="Fasilitas 4">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Aula Pondok</h5>
                <p class="text-gradient-gold-white">Aula Multifungsi Untuk mengaji maupun solat berjamaah.</p>
            </div>
        </div>
        <!--  -->
        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas5.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Mushola Pondok</h5>
                <p class="text-gradient-gold-white">Tempat sholat berjamaah para santri.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas6.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Pojok Baca</h5>
                <p class="text-gradient-gold-white">Pojok baca tempat buku bacaan para santri.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas8.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Kamar mandi</h5>
                <p class="text-gradient-gold-white">Fasilitas umum kamar mandi.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas9.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Perpustakaan</h5>
                <p class="text-gradient-gold-white">Fasilitas Perpustakaan untuk para santri.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas10.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Dapur</h5>
                <p class="text-gradient-gold-white">Fasilitas Dapur untuk para santri.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas11.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Poskestren</h5>
                <p class="text-gradient-gold-white">Pos Kesehatan Pesantren.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas12.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Kamar Tidur</h5>
                <p class="text-gradient-gold-white">Fasilitas Kamar tidur untuk santri.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/icons/fasilitas13.jpg') }}" class="d-block w-100" alt="Fasilitas 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-gradient-gold-white">Ruang Tamu</h5>
                <p class="text-gradient-gold-white">Ruang singgah para tamu.</p>
            </div>
        </div>

    </div>

    <!-- Tombol Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
    </button>
</div>
</div>


</section>
<!-- Foto dan Fasilitas -->

<script async src="https://www.instagram.com/embed.js"></script>

@endsection
