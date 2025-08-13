<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{('assets/icons/ppmhicon.ico') }}">
        <title>Pondok Pesantren Modern Hidayatullah</title>
        <!-- Meta Untuk Tampil Whatsapp -->
         @if (Request::segment(1) == '')
            <meta property ="og:title" content="Pondok Pesantren Modern Hidayatullah">
            <meta name="description" content="Pondok Pesantren Modern Hidayatullah adalah lembaga pendidikan Islam yang berkomitmen untuk mencetak generasi yang berakhlak mulia, berilmu, dan siap menghadapi tantangan zaman.">
            <meta property ="og:url" content="https://hidayatullah.com">
            <meta property ="og:description" content="Pondok Pesantren Modern Hidayatullah.">
            <meta property ="og:image" content="{{ asset('assets/icons/logoppmhico.ico') }}">
            <meta property ="og:type" content="article">
            <title>Pondok Pesantren Modern Hidayatullah</title>
        @elseif (Request::segment(1) == 'detail')
            <meta property ="og:title" content="{{ $artikel->judul }}">
            <meta name="description" content="{{ $artikel->judul }}">
            <meta property="og:url" content="http://pesantrenmodernhidayatullah.com/detail/{{ $artikel->slug }}">
            <meta property="og:description" content="{{ $artikel->judul }}">
            @if ($artikel->image)
            <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}">
            @else
            <meta property="og:image" content="{{ asset('assets/icons/logoppmhico.ico') }}">
        @endif
            <meta property="og:type" content="article">
            <title>Pesantren Modern Hidayatullah | {{ $artikel->title }}</title>
        @endif


        <!-- Meta Untuk Tampil Whatsapp -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <!-- Animasi Scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Magnific -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

        <!-- Summernote -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        

        
    </head>

    <body>

    <!-- Navbar -->
     @include('layouts.navbar')
    <!-- Content -->
     @yield('content')

     <!-- Footer -->
<section id="footer" class="bg-white" data-aos="zoom-out">
    <div class="container py-4">
        <footer>
            <div class="row align-items-start">
                <!-- Kolom Navigasi -->
                <div class="col-12 col-md-4 mb-3">
                    <h5 class="fw-bold mb-3">Navigasi</h5>
                    <div class="d-flex">
                        <ul class="nav flex-column me-4">
                            <li class="nav-item mb-2"><a href="/berita" class="nav-link p-0 ">Berita Pesantren</a></li>
                            <li class="nav-item mb-2"><a href="/profil/pendiri" class="nav-link p-0 ">Profil Pendiri Pondok Pesantren</a></li>
                            <li class="nav-item mb-2"><a href="/foto" class="nav-link p-0 ">Galeri Pesantren</a></li>
                        </ul>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="/login" class="nav-link p-0 ">Admin </a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Info PSB</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Prestasi</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Vidio Kegiatan</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Kolom Kontak -->
                <div class="col-12 col-md-2 mb-3">
                    <h5 class="fw-bold mb-3">Hubungi Kami</h5>
                    <div class="d-flex mb-3 flex-wrap">
                        <a href="" target="_blank" class="text-decoration-none text-dark me-2 mb-2">
                            <img src="{{ asset('assets/icons/wawa.png') }}" height="30" width="30" alt="">
                        </a>
                        <a href="" target="_blank" class="text-decoration-none text-dark me-2 mb-2">
                            <img src="{{ asset('assets/icons/gmaill.png') }}" height="30" width="30" alt="">
                        </a>
                        <a href="" target="_blank" class="text-decoration-none text-dark me-2 mb-2">
                            <img src="{{ asset('assets/icons/igig.png') }}" height="30" width="30" alt="">
                        </a>
                        <a href="" target="_blank" class="text-decoration-none text-dark me-2 mb-2">
                            <img src="{{ asset('assets/icons/ytyt.png') }}" height="30" width="30" alt="">
                        </a>
                    </div>
                </div>
                <!-- kolom 3 -->
                <div class="col-12 col-md-3 mb-3">
                    <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">PonpesHidayatullah@gmail.com</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">+625-8292-84747</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">+628-7685-3482</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">#PonpesHidayatullahHebat</a></li>
                    </ul>
                </div>
                <!-- Kolom  4 -->
                <div class="col-12 col-md-3 mb-3">
    <h5 class="font-inter fw-bold mb-3">Alamat Pondok Pesantren</h5>
    <p>
        <a href="https://maps.app.goo.gl/xLGegs8cuEnrxm3FA"
           target="_blank"
           class="text-white text-decoration-none">
           Jl. Kalimantan Nomer 67, Sananwetan, Kota Blitar
        </a>
    </p>
</div>


                <div class="container py-4">
        <div class="d-flex justify-content-between">
            <div>
                Pesantren Hidayatullah &copy; 2025
            </div>
            <div class="d-flex">
                <p class="me-4">Syarat & Ketentuan</p>
                <p>
                    <a href="/#" class="text-decoration-dark">Kebijakan Privasi</a>
                </p>
            </div>
        </div>
    </div>

            </div>
        </footer>
    </div>
</section>

<!-- <section class="bg-light border-top" data-aos="zoom-out">
    
</section> -->
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- Magnific -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/magnific.js') }}"></script>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDH27Xc0jk=" crossorigin="anonymous"></script>

<!-- Summernote -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

 <script type="text/javascript">
    $(document).ready(function(){
        $('#summernote').summernote({
            height: 300,
        });
    })
 </script>

                <!-- Animasi Scroll -->
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                    <script>
                        AOS.init();


                        // Magnific
                        $(document).ready(function() {
                            $('.image-link').magnificPopup({
                                type: 'image',
                                retina: {
                                    ratio: 1,
                                    replaceSrc: function(item, ratio){
                                        return item.src.replace(/\.\w+$/, function(m){ 
                                            return '@2x' + m; 
                                        });
                                    }
                                }
                            });
                        });
                    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector('.fixed-top');
            if (navbar) {
                window.onscroll = () => {
                    if (window.scrollY > 100) {
                        navbar.classList.add("scroll-nav-active");
                        navbar.classList.add("text-nav-active");
                        // navbar.classList.remove("navbar-dark");
                    } else {
                        navbar.classList.remove("scroll-nav-active");
                        // navbar.classList.add("navbar-dark");
                    }
                }
            }
        });
    </script>
    </body>
</html>
