@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px;" class="py-5">
    <div class="container">
        <!-- Judul Halaman -->
        <div class="text-center mb-4">
            <h1 class="fw-bold">Peserta Didik</h1>
            <p class="text-muted" style="max-width: 700px; margin: auto; text-align: justify;">
                Pondok Pesantren Modern Hidayatullah menerima peserta didik dibawah naungan Yayasan Masjid 
                Hidayatullah. Kami menyediakan pendidikan yang berkualitas mulai dari :
            </p>
        </div>

        <!-- Kotak Brosur -->
<div class="row text-center my-5">
    <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('assets/images/kbhidayatullah.jpg') }}" 
             class="img-fluid border rounded brosur-card" 
             alt="Brosur 1"
             data-bs-toggle="modal" 
             data-bs-target="#brosurModal1">
        <p class="mt-2 fw-bold">KB Plus Hidayatullah</p>
    </div>

    <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('assets/images/rahidayatullah1.jpg') }}" 
             class="img-fluid border rounded brosur-card" 
             alt="Brosur 2"
             data-bs-toggle="modal" 
             data-bs-target="#brosurModal2">
        <p class="mt-2 fw-bold">RA Plus Hidayatullah</p>
    </div>

    <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('assets/images/mihidayatullah1.jpg') }}" 
             class="img-fluid border rounded brosur-card" 
             alt="Brosur 3"
             data-bs-toggle="modal" 
             data-bs-target="#brosurModal3">
        <p class="mt-2 fw-bold">MI Hidayatullah</p>
    </div>

    <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('assets/images/mtshhidayatullah.jpg') }}" 
             class="img-fluid border rounded brosur-card" 
             alt="Brosur 4"
             data-bs-toggle="modal" 
             data-bs-target="#brosurModal4">
        <p class="mt-2 fw-bold">MTs Hidayatullah</p>
    </div>
</div>

<!-- Modal Brosur -->
<div class="modal fade" id="brosurModal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div id="carouselBrosur1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/images/kbhidayatullah.jpg') }}" class="d-block w-100 img-fluid" alt="KB - Hidayatullah">
            </div>
            <!-- <div class="carousel-item">
              <img src="{{ asset('assets/images/brosur2b.jpg') }}" class="d-block w-100 img-fluid" alt="Brosur 2 - Halaman 2">
            </div> -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBrosur1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBrosur1" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="brosurModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div id="carouselBrosur2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/images/rahidayatullah1.jpg') }}" class="d-block w-100 img-fluid" alt="RA Hidayatullah - Halaman 1">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/rahodayatullah2.jpg') }}" class="d-block w-100 img-fluid" alt="RA Hidayatullah - Halaman 2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBrosur2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBrosur2" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="brosurModal3" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div id="carouselBrosur3" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/images/mihidayatullah1.jpg') }}" class="d-block w-100 img-fluid" alt="MI Hidayatullah - Halaman 1">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/mihidayatullah2.jpg') }}" class="d-block w-100 img-fluid" alt="MI Hidayatullah - Halaman 2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBrosur3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBrosur3" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="brosurModal4" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div id="carouselBrosur4" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/images/mtshhidayatullah.jpg') }}" class="d-block w-100 img-fluid" alt="Brosur 2 - Halaman 1">
            </div>
            <!-- <div class="carousel-item">
              <img src="{{ asset('assets/images/brosur2b.jpg') }}" class="d-block w-100 img-fluid" alt="Brosur 2 - Halaman 2">
            </div> -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBrosur4" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBrosur4" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>




        <!-- Daftar -->
         <div class="row text-center mt-5 mb-4">
    <div class="col-md-3 stat-item">
        <h2 class="fw-bold text-success" data-target="50">0+</h2>
        <p>Peserta Didik Aktif</p>
    </div>
    <div class="col-md-3 stat-item">
        <h2 class="fw-bold text-success" data-target="150">0+</h2>
        <p>Lulusan</p>
    </div>
    <div class="col-md-3 stat-item">
        <h2 class="fw-bold text-success" data-target="10">0</h2>
        <p>Partner Pendidikan</p>
    </div>
    <div class="col-md-3 stat-item">
        <h2 class="fw-bold text-success" data-target="2022">2022</h2>
        <p>Tahun Berdiri</p>
    </div>
</div>

    <div class="text-center mb-4">
                    <h2 class="fw-bold">Partner Pendidikan</h2>
            <p class="text-muted" style="max-width: 700px; margin: auto; text-align: justify;">
                Selain itu, Pondok Pesantren Modern Hidayatullah juga menerima peserta didik dari berbagai partner pendidikan
                di Kota Blitar.
            </p>

        </div>
<!--  -->
        <<!-- Carousel Partner Pendidikan -->
<div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner text-center">

        <!-- Item 1 -->
        <div class="carousel-item active">
            <div class="carousel-box">
                <img src="{{ asset('assets/images/smkn11.jpg') }}" class="d-block mx-auto" alt="Sekolah 1">
            </div>
            <h5 class="mt-3">SMKN 1 Blitar</h5>
        </div>

        <!-- Item 2 -->
        <div class="carousel-item">
            <div class="carousel-box">
                <img src="{{ asset('assets/images/smkislam.webp') }}" class="d-block mx-auto" alt="Sekolah 2">
            </div>
            <h5 class="mt-3">SMK Islam 1 Blitar</h5>
        </div>

        <!-- Item 3 -->
        <div class="carousel-item">
            <div class="carousel-box">
                <img src="{{ asset('assets/images/mtsn2.jpeg') }}" class="d-block mx-auto" alt="Sekolah 3">
            </div>
            <h5 class="mt-3">MTsn 2 Kota Blitar</h5>
        </div>

        <!-- Item 4 -->
        <div class="carousel-item">
            <div class="carousel-box">
                <img src="{{ asset('assets/images/unu.jpg') }}" class="d-block mx-auto" alt="Sekolah 4">
            </div>
            <h5 class="mt-3">Universitas Nahdlatul Ulama Blitar</h5>
        </div>

        <!-- dst... -->
    </div>

    <!-- Tombol Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>


        <!-- 4. Formulir Pendaftaran Cepat -->
<div class="mt-5 p-4 rounded shadow" style="background: linear-gradient(135deg, #1a4d2e, #1f8a4b); color: white;">
    <h3 class="text-center fw-bold mb-3">Formulir Pendaftaran Cepat</h3>
    <form id="waForm">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP / WhatsApp</label>
            <input type="tel" class="form-control" id="hp" name="hp" placeholder="Masukkan nomor HP" required>
        </div>
        <div class="mb-3">
            <label for="asal" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal" name="asal" placeholder="Masukkan asal sekolah" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-light fw-bold">
                Kirim ke WhatsApp
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById('waForm').addEventListener('submit', function(e) {
    e.preventDefault(); // supaya tidak reload halaman

    // Ambil data dari input
    let nama = document.getElementById('nama').value;
    let hp = document.getElementById('hp').value;
    let asal = document.getElementById('asal').value;

    // Format pesan untuk WA
    let pesan = `Assalamualaikum wr. wb., saya ingin mendaftar.%0A%0ANama Lengkap: ${nama}%0ANomor HP: ${hp}%0AAsal Sekolah: ${asal}`;

    // Nomor WA tujuan (format internasional tanpa +)
    let nomor = "6281231464192";

    // Buat link WhatsApp
    let url = `https://wa.me/${nomor}?text=${pesan}`;

    // Buka di tab baru
    window.open(url, '_blank');
});
</script>

    </div>

</section>


    <script>
// Fungsi animasi angka
function animateValue(el, start, end, duration) {
    let startTime = null;
    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        el.textContent = Math.floor(progress * (end - start) + start) + (el.dataset.target > 20 ? "" : "");
        if (progress < 1) {
            requestAnimationFrame(step);
        }
    }
    requestAnimationFrame(step);
}

// Observer untuk efek scroll
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const h2 = entry.target.querySelector("h2");
            animateValue(h2, 0, parseInt(h2.dataset.target), 1500);
            entry.target.classList.add("show");
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

// Daftarkan elemen
document.querySelectorAll(".stat-item").forEach(el => observer.observe(el));
</script>
    
@endsection
