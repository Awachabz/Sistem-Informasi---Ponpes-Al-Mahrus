<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ponpes Al-Mahrus</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}?v={{ time() }}">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    html {
      scroll-behavior: smooth;
    }

    body { 
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; 
    }
    .navbar-brand img { height: 90px; } 
    .navbar .container-fluid { padding-left: 0; }

    .menu-strip { background-color: #198754; width: 100%; }
    .menu-strip .nav-link {
      color: #fff !important;
      font-weight: 500;
      position: relative; 
    }
    .menu-strip .nav-link:hover {
      background: rgba(255,255,255,0.2);
      border-radius: 4px;
    }

    /* Caret untuk semua menu */
    .nav-item > .nav-link::after {
      content: '';
      display: inline-block;
      margin-left: 0.5em;
      vertical-align: middle;
      border: solid white;
      border-width: 0 2px 2px 0;
      padding: 3px;
      transform: rotate(-45deg);
      transition: transform 0.3s ease;
    }
    .nav-item.dropdown > .dropdown-toggle.show::after {
      transform: rotate(45deg);
    }
    .nav-item.active > .nav-link::after {
      transform: rotate(45deg);
    }

    .dropdown-menu { background-color: #198754; border: none; }
    .dropdown-item { color: #fff !important; }
    .dropdown-item:hover { background-color: rgba(255,255,255,0.2); color: #fff !important; }

    footer { background-color: #198754; color: #fff; }

    /* === Efek teks ketik === */
    .typewriter-text {
      font-size: 1.5rem;
      font-weight: 600;
      color: #198754;
      border-right: 3px solid #198754;
      white-space: nowrap;
      overflow: hidden;
    }

    /* Geser tombol login/register sedikit ke kiri */
    .navbar .auth-buttons {
      margin-right: 40px;
    }
  </style>

  @stack('head')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" onerror="this.style.display='none'">
        <div class="ms-3 d-flex flex-column">
          <span class="fw-bold fs-2 text-success">Ponpes Al-Mahrus</span>
          <span class="text-success" style="font-size: 0.9rem; line-height: 1.3;">
            Dusun Sindangkarya, RT/RW 026/008, Desa Lemahabang,<br>
            Kec. Lemahabang, Kab. Karawang, Jawabarat (41383)
          </span>
        </div>
      </a>

      <!-- Teks animasi di tengah atas -->
      <div class="text-center mx-auto d-none d-lg-block">
        <div class="typewriter-text" id="typewriter"></div>
      </div>

      <!-- Tombol login/register agak ke kiri -->
      <div class="auth-buttons d-flex align-items-center">
        @guest
          <a href="{{ route('login') }}" class="btn btn-outline-success me-2">Masuk</a>
          <a href="{{ route('register') }}" class="btn btn-success">Daftar</a>
        @else
          <div class="dropdown">
            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              @if(Auth::user()->role === 'admin')
                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
              @else
                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
              @endif
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        @endguest
      </div>
    </div>
  </nav>

  <div class="menu-strip">
    <div class="container">
      <ul class="nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}#beranda">Beranda</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('tentang') }}#tentang">Tentang Kami</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="rotinanDropdown" role="button" 
             data-bs-toggle="dropdown" aria-expanded="false">
            Rotinan
          </a>
          <ul class="dropdown-menu" aria-labelledby="rotinanDropdown">
            <li><a class="dropdown-item" href="{{ route('surat yasiin') }}">Yasiin</a></li>
            <li><a class="dropdown-item" href="{{ route('alwakiah') }}">Surat Al-Waqi’ah</a></li>
            <li><a class="dropdown-item" href="#tabaraq">Tabaraq</a></li>
            <li><a class="dropdown-item" href="{{ route('kamilah') }}">Sholawat Kamilah</a></li>
            <li><a class="dropdown-item" href="{{ route('nurzati') }}">Sholawat Nurzati</a></li>
            <li><a class="dropdown-item" href="{{ route('anilqodr') }}">Sholawat Anil Qodr</a></li>

          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#album">Album</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#struktur">Struktur</a>
        </li>

        <!-- ✅ Dropdown User khusus Admin -->
     @php
  use App\Models\User;
  $pendingCount = User::where('status', 'pending')->count();
@endphp

<li class="nav-item dropdown {{ request()->is('admin/users*') ? 'active' : '' }}">
  <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
     data-bs-toggle="dropdown" aria-expanded="false">
    <span>User</span>
    @if($pendingCount > 0)
      <span class="badge bg-danger ms-2">{{ $pendingCount }}</span>
    @endif
  </a>
  <ul class="dropdown-menu" aria-labelledby="userDropdown">
    <li>
      <a class="dropdown-item" href="{{ route('admin.users') }}">Daftar User</a>
<a class="dropdown-item d-flex justify-content-between align-items-center" href="{{ route('admin.pending') }}">
        Verifikasi User
        @if($pendingCount > 0)
          <span class="badge bg-danger">{{ $pendingCount }}</span>
        @endif
      </a>
    </li>
  </ul>
</li>


      </ul>
    </div>
  </div>

  <main>
    @yield('content')
  </main>

  <footer class="text-center py-3 mt-4">
    <div class="container">
      <small>© {{ date('Y') }} Ponpes Al-Mahrus</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // === Efek ketik ===
    const text = "Assalamualaikum Warahmatullahi Wabarakatuh.";
    const el = document.getElementById("typewriter");
    let index = 0, deleting = false;
    function typeEffect() {
      if (!deleting && index <= text.length) el.textContent = text.substring(0, index++);
      else if (deleting && index >= 0) el.textContent = text.substring(0, index--);

      if (index === text.length + 1) { deleting = true; setTimeout(typeEffect, 1000); return; }
      else if (index === 0 && deleting) deleting = false;
      setTimeout(typeEffect, deleting ? 70 : 120);
    }
    typeEffect();

    // === Dropdown caret ===
    document.querySelectorAll('.nav-item.dropdown').forEach(dropdown => {
      const toggle = dropdown.querySelector('.dropdown-toggle');
      dropdown.addEventListener('show.bs.dropdown', () => toggle.classList.add('show'));
      dropdown.addEventListener('hide.bs.dropdown', () => toggle.classList.remove('show'));
    });

    // === Highlight menu aktif ===
    document.querySelectorAll('.nav-item > .nav-link:not(.dropdown-toggle)').forEach(link => {
      link.addEventListener('click', function() {
        document.querySelectorAll('.nav-item').forEach(li => li.classList.remove('active'));
        this.parentElement.classList.add('active');
      });
    });

    // === Smooth Scroll dengan offset (seperti Beranda) ===
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", function (e) {
        const href = this.getAttribute("href");
        if (href === "#") return;
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          const navbarHeight = document.querySelector(".navbar").offsetHeight + document.querySelector(".menu-strip").offsetHeight;
          const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight + 10;

          window.scrollTo({
            top: targetPosition,
            behavior: "smooth"
          });
        }
      });
    });
  </script>

  @stack('scripts')
</body>
</html>
