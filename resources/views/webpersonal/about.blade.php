<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Mey</title>
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
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/tentang') }}">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/portofolio') }}">Portofolio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===== Page Header ===== -->
  <header class="text-center pt-5 pb-4 mb-5 border-bottom">
    <div class="container">
      <h1 class="fs-2 fw-bold mb-2">Tentang Saya</h1>
      <p class="text-secondary mb-0">Sekilas latar belakang, keahlian, dan hal yang saya minati.</p>
    </div>
  </header>

  <!-- ===== Content ===== -->
  <section class="pb-5">
    <div class="container">

      <div class="card rounded-4 mb-4">
        <div class="card-body p-4">
          <h2 class="h5 text-primary mb-3">Pendidikan</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent d-flex align-items-baseline gap-2 px-0">
              <i class="bi bi-caret-right-fill text-accent small"></i>
              <span><strong>Telkom University</strong> &mdash; S1 Sistem Informasi (2025 - sekarang)</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="card rounded-4 mb-4">
        <div class="card-body p-4">
          <h2 class="h5 text-primary mb-3">Keahlian</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent d-flex align-items-baseline gap-2 px-0">
              <i class="bi bi-caret-right-fill text-accent small"></i>
              <div><strong>HTML & CSS</strong></div>
            </li>
            <li class="list-group-item bg-transparent d-flex align-items-baseline gap-2 px-0">
              <i class="bi bi-caret-right-fill text-accent small"></i>
              <div><strong>JavaScript Dasar</strong></div>
            </li>
            <li class="list-group-item bg-transparent d-flex align-items-baseline gap-2 px-0">
              <i class="bi bi-caret-right-fill text-accent small"></i>
              <div><strong>Microsoft Office</strong></div>
            </li>
          </ul>
        </div>
      </div>

      <div class="card rounded-4 mb-4">
        <div class="card-body p-4">
          <h2 class="h5 text-primary mb-3">Minat</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent d-flex align-items-baseline gap-2 px-0">
              <i class="bi bi-caret-right-fill text-accent small"></i>
              <span><strong>Web Development</strong></span>
            </li>
            <li class="list-group-item bg-transparent d-flex align-items-baseline gap-2 px-0">
              <i class="bi bi-caret-right-fill text-accent small"></i>
              <span><strong>Application Development</strong></span>
            </li>
            <li class="list-group-item bg-transparent d-flex align-items-baseline gap-2 px-0">
              <i class="bi bi-caret-right-fill text-accent small"></i>
              <span><strong>Back-End Development</strong></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
