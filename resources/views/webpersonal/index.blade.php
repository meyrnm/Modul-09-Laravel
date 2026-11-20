
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda Mey</title>
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
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/beranda') }}">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/portofolio') }}">Portofolio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===== Hero ===== -->
  <section class="text-center py-5">
    <div class="container">
      <div class="bg-brand rounded-circle d-inline-flex mb-4">
        <img src="{{ asset('img/avatar.jpg') }}" alt="Avatar" class="rounded-circle" width="120" height="120">
      </div>
      <h1 class="fs-2 fw-bold mb-3">MEY RENA MAULIDA</h1>
      <p class="fs-5 text-secondary mx-auto" style="max-width: 580px;">
        Mahasiswa S1 Sistem Informasi Telkom University yang tertarik pada pengembangan aplikasi dan website.
      </p>
      <div class="d-flex flex-wrap justify-content-center gap-3 mt-4 d-print-none">
        <a href="{{ url('/portofolio') }}" class="btn btn-primary px-4 py-2 rounded-3 fw-semibold">Lihat Portofolio</a>
        <a href="{{ url('/tentang') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 fw-semibold">Tentang Saya</a>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
