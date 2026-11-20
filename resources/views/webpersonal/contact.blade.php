
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Mey</title>
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
          <li class="nav-item"><a class="nav-link" href="{{ url('/portofolio') }}">Portofolio</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===== Page Header ===== -->
  <header class="text-center pt-5 pb-4 mb-5 border-bottom">
    <div class="container">
      <h1 class="fs-2 fw-bold mb-2">Hubungi Saya</h1>
      <p class="text-secondary mb-0">Tersedia untuk diskusi proyek, kolaborasi, atau sekadar bertukar ide.</p>
    </div>
  </header>

  <!-- ===== Contact ===== -->
  <section class="pb-5">
    <div class="container">
      <div class="row g-4">

        <div class="col-sm-6">
          <a href="mailto:meyrenamaulida@student.telkomuniversity.ac.id" class="card h-100 rounded-4 text-decoration-none text-body">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <div class="icon-box d-flex align-items-center justify-content-center flex-shrink-0 rounded-3 bg-primary bg-opacity-10 text-primary fs-4">
                <i class="bi bi-envelope"></i>
              </div>
              <div>
                <div class="small fw-semibold text-uppercase text-secondary">Email</div>
                <div class="fw-medium">meyrenam@gmail.com</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-6">
          <a href="https://github.com/meyrnm" target="_blank" rel="noopener" class="card h-100 rounded-4 text-decoration-none text-body">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <div class="icon-box d-flex align-items-center justify-content-center flex-shrink-0 rounded-3 bg-primary bg-opacity-10 text-primary fs-4">
                <i class="bi bi-github"></i>
              </div>
              <div>
                <div class="small fw-semibold text-uppercase text-secondary">GitHub</div>
                <div class="fw-medium">github.com/meyrnm</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-6">
          <a href="https://linkedin.com/in/meyrenam" target="_blank" rel="noopener" class="card h-100 rounded-4 text-decoration-none text-body">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <div class="icon-box d-flex align-items-center justify-content-center flex-shrink-0 rounded-3 bg-primary bg-opacity-10 text-primary fs-4">
                <i class="bi bi-linkedin"></i>
              </div>
              <div>
                <div class="small fw-semibold text-uppercase text-secondary">LinkedIn</div>
                <div class="fw-medium">linkedin.com/in/meyrenam</div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-6">
          <a href="https://instagram.com/meyouthere_" target="_blank" rel="noopener" class="card h-100 rounded-4 text-decoration-none text-body">
            <div class="card-body p-4 d-flex align-items-center gap-3">
              <div class="icon-box d-flex align-items-center justify-content-center flex-shrink-0 rounded-3 bg-primary bg-opacity-10 text-primary fs-4">
                <i class="bi bi-instagram"></i>
              </div>
              <div>
                <div class="small fw-semibold text-uppercase text-secondary">Instagram</div>
                <div class="fw-medium">@meyouthere_</div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
