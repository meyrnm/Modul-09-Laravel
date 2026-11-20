<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Mey</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  @vite(['resources/sass/app.scss'])
</head>

<body>
  <!-- ===== Navbar ===== -->
  <nav class="navbar navbar-expand-sm sticky-top bg-white border-bottom d-print-none">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="{{ url('/beranda') }}">Mey</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Buka menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto gap-sm-2">
          <li class="nav-item"><a class="nav-link" href="{{ url('/beranda') }}">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">Tentang</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/portofolio') }}">Portofolio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===== Page Header ===== -->
  <header class="text-center pt-5 pb-4 mb-5 border-bottom">
    <div class="container">
      <h1 class="fs-2 fw-bold mb-2">Portofolio</h1>
      <p class="text-secondary mb-0">Proyek dan tugas kuliah yang pernah saya kerjakan.</p>
    </div>
  </header>

  <!-- ===== Projects ===== -->
  <section class="pb-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        <!-- Project 1 -->
        <div class="col">
          <article class="card h-100 rounded-4 overflow-hidden">
            <img src="{{ asset('img/project1.png') }}" class="card-img-top thumb" alt="Tampilan Formulir Registrasi Pengguna">
            <div class="card-body p-4">
              <span class="badge bg-primary bg-opacity-10 text-primary text-uppercase mb-3">Praktikum PAW</span>
              <h3 class="h5 mb-2">
                <a href="https://meyrnm.github.io/form-registrasi/" target="_blank" rel="noopener" class="stretched-link text-decoration-none text-body">
                  Formulir Registrasi Pengguna
                </a>
              </h3>
              <p class="card-text text-secondary small">
                Membuat halaman formulir pendaftaran pengguna
                dengan input data dan tampilan antarmuka.
              </p>
            </div>
          </article>
        </div>

        <!-- Project 2 -->
        <div class="col">
          <article class="card h-100 rounded-4 overflow-hidden">
            <img src="{{ asset('img/project2.png') }}" class="card-img-top thumb" alt="Website E-Commerce Tanaman Hias">
            <div class="card-body p-4">
              <span class="badge bg-primary bg-opacity-10 text-primary text-uppercase mb-3">Prototipe Design Thinking</span>
              <h3 class="h5 mb-2">
                <a href="https://meyrnm.github.io/LittleSeed-Plants/" target="_blank" rel="noopener" class="stretched-link text-decoration-none text-body">
                  Website E-Commerce Tanaman Hias
                </a>
              </h3>
              <p class="card-text text-secondary small">
                Membuat website penjualan tanaman hias untuk
                menampilkan berbagai pilihan tanaman dan informasi produk.
              </p>
            </div>
          </article>
        </div>

        <!-- Project 3 -->
        <div class="col">
          <article class="card h-100 rounded-4 overflow-hidden">
            <img src="{{ asset('img/project3.png') }}" class="card-img-top thumb" alt="Aplikasi Kalkulator Sederhana">
            <div class="card-body p-4">
              <span class="badge bg-primary bg-opacity-10 text-primary text-uppercase mb-3">Praktikum PAW</span>
              <h3 class="h5 mb-2">
                <a href="https://meyrnm.github.io/basic-calculator/" target="_blank" rel="noopener" class="stretched-link text-decoration-none text-body">
                  Aplikasi Kalkulator Sederhana
                </a>
              </h3>
              <p class="card-text text-secondary small">
                Membuat aplikasi kalkulator berbasis web
                yang dapat melakukan operasi aritmatika dasar.
              </p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
