 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request :: segment(1) == '' ? '' : 'bg-white shadow' }}">
  <div class="container">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('assets/images/ppmhbgtr.png') }}" height="55" width="55" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/sejarah">Sejarah</a>
        </li>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Profil
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/profil/pendiri">Profil Pendiri</a></li>
    <li><a class="dropdown-item" href="/profil/pengasuh">Profil Pengasuh</a></li>
    <li><a class="dropdown-item" href="/profil/asatid">Profil Asatid</a></li>
  </ul>
</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kalam') }}">Kalam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/berita">Berita</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="/foto">Galleri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#footer">Kontak</a>
        </li>

      </ul>
      <div class="d-flex">
        @auth
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-dark">Logout</button>
        </form>
        @else
          <a href="https://wa.me/6281231464192?text=Halo%20Assalamualaikum%20saya%20ingin%20daftar" 
            target="_blank" 
            class="btn btn-gradient">
            Daftar Sekarang
          </a>
        @endauth
      </div>
    </div>
  </div>
</nav>

    <!-- End Navbar -->
