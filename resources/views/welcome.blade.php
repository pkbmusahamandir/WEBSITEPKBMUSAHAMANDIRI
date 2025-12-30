@extends('layouts.layouts')

@section('content')

<section id="hero">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

    <div class="carousel-inner">
      <div class="carousel-item active hero-slide" style="background-image: url('{{ asset('assets/images/cr1.jpeg') }}')"></div>
      <div class="carousel-item hero-slide" style="background-image: url('{{ asset('assets/images/cr2.jpeg') }}')"></div>
      <div class="carousel-item hero-slide" style="background-image: url('{{ asset('assets/images/cr3.jpeg') }}')"></div>
      <div class="carousel-item hero-slide" style="background-image: url('{{ asset('assets/images/cr4.jpeg') }}')"></div>
    </div>
    <div class="hero-overlay"></div>
    <div class="container position-absolute top-50 start-50 translate-middle" style="z-index:10;">
      <div class="row align-items-center hero-top">
        <div class="col-lg-7 col-md-12 text-white hero-text">
          <h1 class="fw-bold mb-3">- Selamat Datang -</h1>
          <h2 class="fw-semibold mb-3">PKBM (Pusat Kegiatan Belajar Masyarakat) Usaha Mandiri</h2>
          <p class="lead mb-4">"Kademangan - Blitar"</p>
        </div>
        <div class="col-lg-5 d-none d-lg-block">
          <div class="profile-card d-flex align-items-center justify-content-between p-3 rounded-3 shadow-lg">
            <div class="text-white">
              <h6 class="fw-bold mb-1">- Pendiri -<br>PKBM Usaha Mandiri</h6>
              <p class="mb-2">Drs. SETYAWAN ADI SUBAGIYO, M.Pd</p>
              <a href="/profil" class="text-white text-decoration-none fw-semibold">
                Selengkapnya <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="ms-3">
              <img src="{{ asset('assets/images/pendiri.jpg') }}" alt="Pendiri" class="rounded-2" style="width:100px; height:130px; object-fit:cover;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<section id="berita" class="py-5 bg-light">
  <div class="container">
    <div class="header-berita text-center mb-5">
      <h2 class="fw-bold">📰 Berita Kegiatan PKBM Usaha Mandiri</h2>
      <p class="text-muted">Informasi terbaru seputar kegiatan & aktivitas Belajar</p>
    </div>
    <div class="row g-4" data-aos="fade-up">
      @foreach ($artikels as $item)
      <div class="col-lg-4 col-md-6">
        <div class="card berita-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
          <div class="berita-img overflow-hidden">
            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
          </div>
          <div class="p-4 konten-berita">
            <p class="mb-2 text-secondary small d-flex align-items-center">
              <i class="bi bi-calendar-date me-2"></i>
              {{ $item->created_at->format('d M Y') }}
            </p>
            <h4 class="fw-bold mb-3 berita-title">
              <a href="{{ route('blog.detail', ['slug' => $item->slug]) }}" class="text-dark text-decoration-none">
                {{ $item->judul }}
              </a>
            </h4>
            <p class="text-secondary small mb-3">#PusatKegiatanBelajarMasyarakatUsahaMandiri</p>
            <a href="{{ route('blog.detail', ['slug' => $item->slug]) }}" class="btn btn-sm btn-danger rounded-pill px-3">
              Selengkapnya <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="footer-berita text-center mt-5">
      <a href="/berita" class="btn btn-outline-danger rounded-pill px-4 py-2">
        Lihat Semua Berita
      </a>
    </div>
  </div>
</section>
<section id="modul" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">📘 Modul Belajar PKBM Usaha Mandiri</h2>
            <p class="text-muted">Pilih modul sesuai jenjang pendidikan Anda</p>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-scale">
                    <div class="card-body">
                        <div class="display-4 mb-3">📚</div>
                        <h4 class="fw-bold text-success">Paket A</h4>
                        <p class="text-muted">Setara SD/MI, untuk mendukung pendidikan dasar dengan materi yang mudah dipahami.</p>
                        <a href="{{ route('modul.a') }}" class="btn btn-success rounded-pill px-4 mt-3">Lihat Modul</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-scale">
                    <div class="card-body">
                        <div class="display-4 mb-3">📚</div>
                        <h4 class="fw-bold text-primary">Paket B</h4>
                        <p class="text-muted">Setara SMP/MTs, memberikan pendidikan menengah pertama yang berkarakter.</p>
                        <a href="{{ route('modulB.user') }}" class="btn btn-primary rounded-pill px-4 mt-3">Lihat Modul</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-scale">
                    <div class="card-body">
                        <div class="display-4 mb-3">📚</div>
                        <h4 class="fw-bold text-danger">Paket C</h4>
                        <p class="text-muted">Setara SMA/MA, untuk mempersiapkan pendidikan lanjut dengan wawasan luas.</p>
                        <a href="{{ route('user.modul_c') }}" class="btn btn-danger rounded-pill px-4 mt-3">Lihat Modul</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-scale:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
    }
</style>
@endsection
