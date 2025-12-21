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
    html { scroll-behavior: smooth; }

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

    /* Panah dropdown */
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

    .nav-item.dropdown.show > .nav-link::after,
    .nav-item.dropdown > .dropdown-toggle.show::after,
    .nav-item.active > .nav-link::after {
      transform: rotate(45deg);
    }

    .dropdown-menu { background-color: #198754; border: none; }
    .dropdown-item { color: #fff !important; }
    .dropdown-item:hover { background-color: rgba(255,255,255,0.2); color: #fff !important; }

    footer { background-color: #198754; color: #fff; }

    /* Efek teks ketik */
    .typewriter-text {
      font-size: 1.5rem;
      font-weight: 600;
      color: #198754;
      border-right: 3px solid #198754;
      white-space: nowrap;
      overflow: hidden;
    }

    .navbar .auth-buttons { margin-right: 40px; }
  </style>

  @stack('head')
</head>
<body>

<!-- ======================== NAVBAR UTAMA ========================= -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-fluid d-flex align-items-center justify-content-between">
    
    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" onerror="this.style.display='none'">
      <div class="ms-3 d-flex flex-column">
        <span class="fw-bold fs-2 text-success">Ponpes Al-Mahrus</span>
        <a href="https://maps.app.goo.gl/ZWjEWJvqxhkDtwMZA" target="_blank"
           class="text-success"
           style="font-size: 0.9rem; line-height: 1.3; text-decoration: none; cursor: pointer;">
          Dusun Sindangkarya, RT/RW 026/008, Desa Lemahabang,<br>
          Kec. Lemahabang, Kab. Karawang, Jawabarat (41383)
        </a>
      </div>
    </a>

    <!-- Teks animasi -->
    <div class="text-center mx-auto d-none d-lg-block">
      <div class="typewriter-text" id="typewriter"></div>
    </div>

    <!-- LOGO NU -->
    <div class="auth-buttons d-flex align-items-center">
      <img src="{{ asset('images/logo_nu.png') }}" alt="Logo NU" style="height:80px;">
    </div>

  </div>
</nav>

<!-- ======================== MENU STRIP ========================= -->
<div class="menu-strip">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- MENU KIRI -->
    <div class="dropdown">
      <button 
        class="btn d-flex align-items-center menu-btn"
        style="padding: 8px 14px; border:none; color:white; font-weight:600;"
        data-bs-toggle="dropdown"
      >
        <img src="/images/menu.png" style="width:40px; height:40px; margin-right:10px;">
        <span class="menu-text">Menu</span>
      </button>

      <style>
        .menu-text { display: none; }
        .menu-btn:hover .menu-text { display: inline; }
      </style>

      <ul class="dropdown-menu">

        <li><a class="dropdown-item" href="{{ route('home') }}#beranda">Beranda</a></li>
        <li><a class="dropdown-item" href="{{ route('tentang') }}#tentang">Tentang Kami</a></li>

        <li class="dropend">
          <a class="dropdown-item dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
            Rotinan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('surat_yasiin') }}">Yasiin</a></li>
            <li><a class="dropdown-item" href="{{ route('alwakiah') }}">Surat Al-Waqiʼah</a></li>
            <li><a class="dropdown-item" href="{{ route('almulk') }}">Surat Al-Mulk</a></li>
            <li><a class="dropdown-item" href="{{ route('kamilah') }}">Sholawat Kamilah</a></li>
            <li><a class="dropdown-item" href="{{ route('nurzati') }}">Sholawat Nurzati</a></li>
            <li><a class="dropdown-item" href="{{ route('anilqodr') }}">Sholawat Anil Qodr</a></li>
                        <li><a class="dropdown-item" href="{{ route('lamyahtalim') }}">لم يحتلم</a></li>
          </ul>
        </li>

        <li><a class="dropdown-item" href="{{ route('album.index') }}">Album</a></li>
        <li><a class="dropdown-item" href="{{ route('struktur.index') }}">Struktur</a></li>

        @php
          use App\Models\User;
          $pendingCount = User::where('status', 'pending')->count();
        @endphp

        @if(auth()->check() && auth()->user()->role === 'admin')
        <li class="dropend">
          <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">
            User
            @if($pendingCount > 0)
              <span class="badge bg-danger ms-2">{{ $pendingCount }}</span>
            @endif
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('admin.users') }}">Daftar User</a></li>
            <li>
              <a class="dropdown-item d-flex justify-content-between align-items-center" href="{{ route('admin.pending') }}">
                Verifikasi User
                @if($pendingCount > 0)
                  <span class="badge bg-danger">{{ $pendingCount }}</span>
                @endif
              </a>
            </li>
          </ul>
        </li>
        @endif

      </ul>
    </div>


    <!-- ========== KANAN – LOGIN / USER ========== -->
    <div class="auth-buttons d-flex align-items-center">

      @guest

        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Masuk</a>
        <a href="{{ route('register') }}" class="btn btn-light text-success">Daftar</a>

      @else

      

<!-- ===================== NOTIFIKASI ===================== -->
<style>
#notif-list.dropdown-menu {
    max-height: 360px;
    overflow-y: auto;
    width: 380px;
}


/* HEADER */
.notif-header {
    padding: 8px 12px;
    border-bottom: 1px solid #eee;
    background: #fff;
    position: sticky;
    top: 0;
    z-index: 2;
    text-align: right;
}

/* ITEM */
.notif-item {
    display: flex;
    gap: 10px;
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.notif-item:last-child {
    border-bottom: none;
}

.notif-thumb img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 6px;
}

.notif-content {
    flex: 1;
}

.notif-actions {
    margin-top: 6px;
    display: flex;
    gap: 6px;
}

.notif-actions button {
    font-size: 12px;
    padding: 2px 8px;
}
</style>

<div class="dropdown me-3">

    <!-- TOMBOL LONCENG -->
    <button class="btn position-relative notif-btn"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
            style="border:none;">
        <img src="{{ asset('images/bell.png') }}" width="30">
        <span id="notif-count"
              class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
              style="display:none;"></span>
    </button>

    <!-- DROPDOWN -->
    <ul class="dropdown-menu dropdown-menu-end p-0" id="notif-list">

        <!-- HEADER -->
        <li class="notif-header">
            <button class="btn btn-sm btn-danger" id="delete-all">
                Hapus Semua
            </button>
            <span id="notif-empty-text"
                  class="text-muted"
                  style="display:none;">
                Tidak ada notifikasi
            </span>
        </li>

        <!-- ITEM VIA JS -->

    </ul>
</div>

<!-- ===================== MODAL DETAIL ===================== -->
<div class="modal fade" id="notifModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifModalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="notifModalImage"
                     src=""
                     class="img-fluid rounded mb-3"
                     style="max-height:70vh; object-fit:contain;">
                <p id="notifModalMessage"></p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const list   = document.getElementById("notif-list");
    const badge  = document.getElementById("notif-count");
    const btn    = document.querySelector(".notif-btn");
    const delAll = document.getElementById("delete-all");
    const emptyText = document.getElementById("notif-empty-text");

    let loaded = false;

    /* ===== LOAD COUNT ===== */
    function loadNotifCount() {
        fetch("{{ route('notification.count') }}")
            .then(res => res.json())
            .then(d => {
                if (d.count > 0) {
                    badge.textContent = d.count;
                    badge.style.display = "inline-block";
                } else {
                    badge.style.display = "none";
                }
            });
    }

    /* ===== LOAD LIST ===== */
    function loadNotifList() {
        if (loaded) return;
        loaded = true;

        fetch("{{ route('notification.list') }}")
            .then(res => res.json())
            .then(data => {

                list.querySelectorAll(".notif-item").forEach(el => el.remove());

                // JIKA KOSONG
                if (!data || data.length === 0) {
                    delAll.style.display = "none";
                    emptyText.style.display = "inline";

                    const li = document.createElement("li");
                    li.className = "text-center text-muted py-3 notif-item";
                    li.innerText = "Tidak ada notifikasi";
                    list.appendChild(li);
                    return;
                }

                // JIKA ADA DATA
                delAll.style.display = "inline-block";
                emptyText.style.display = "none";

                data.forEach(n => {
                    const imgSrc = n.image
                        ? `/storage/${n.image}`
                        : `/images/default-notif.png`;

                    const li = document.createElement("li");
                    li.className = "notif-item";
                    li.dataset.id = n.id;
                    li.dataset.title = n.title ?? '';
                    li.dataset.message = n.message ?? '';
                    li.dataset.image = imgSrc;

                    li.innerHTML = `
                        <div class="notif-thumb">
                            <img src="${imgSrc}">
                        </div>

                        <div class="notif-content">
                            <strong>${n.title ?? '(Tanpa Judul)'}</strong><br>
                            <small>${n.message ?? ''}</small><br>
                            <small class="text-muted">${n.created_at}</small>

                            <div class="notif-actions">
                                <button class="btn btn-sm btn-primary btn-view">Lihat</button>
                                <button class="btn btn-sm btn-danger btn-delete">Hapus</button>
                            </div>
                        </div>
                    `;
                    list.appendChild(li);
                });
            });
    }

    /* ===== EVENT DROPDOWN ===== */
    btn.addEventListener("shown.bs.dropdown", loadNotifList);

    /* ===== AKSI ITEM ===== */
    list.addEventListener("click", function (e) {

        // LIHAT
        if (e.target.classList.contains("btn-view")) {
            const item = e.target.closest(".notif-item");

            document.getElementById("notifModalTitle").innerText =
                item.dataset.title || "Notifikasi";

            document.getElementById("notifModalMessage").innerText =
                item.dataset.message || "-";

            document.getElementById("notifModalImage").src =
                item.dataset.image;

            new bootstrap.Modal(
                document.getElementById("notifModal")
            ).show();
        }

        // HAPUS SATU
        if (e.target.classList.contains("btn-delete")) {
            const item = e.target.closest(".notif-item");
            const id = item.dataset.id;

            if (!confirm("Hapus notifikasi ini?")) return;

            fetch(`/notification/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                }
            }).then(() => {
                item.remove();
                loadNotifCount();
            });
        }
    });

    /* ===== HAPUS SEMUA ===== */
    delAll.addEventListener("click", function () {
        if (!confirm("Hapus semua notifikasi?")) return;

        fetch("{{ route('notification.deleteAll') }}", {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            }
        }).then(() => {
            list.querySelectorAll(".notif-item").forEach(el => el.remove());
            delAll.style.display = "none";
            emptyText.style.display = "inline";
            loadNotifCount();
        });
    });

    /* ===== INIT ===== */
    loadNotifCount();
});
</script>





<!-- PROFIL USER -->
<div class="dropdown">
  <a class="btn btn-outline-light dropdown-toggle" href="#" data-bs-toggle="dropdown">
    {{ Auth::user()->name }}
  </a>

  <ul class="dropdown-menu dropdown-menu-end">

    @if (Auth::user()->role === 'admin')
      <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profil Admin</a></li>

      <!-- 🔥 TOMBOL BUAT NOTIFIKASI UNTUK ADMIN -->
      <li>
        <a class="dropdown-item text-primary fw-bold" href="{{ route('notif-create') }}">
          ➕ Buat Notifikasi
        </a>
      </li>

    @else
      <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profil Saya</a></li>
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
</div>


<!-- ======================== CONTENT ========================= -->
<main>
  @yield('content')
</main>

<!-- ======================== FOOTER ========================= -->
<footer class="text-center py-3 mt-4">
  <div class="container">
    <small>© {{ date('Y') }} Ponpes Al-Mahrus</small>
  </div>
</footer>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ======================== SCRIPT ========================= -->
<script>
/* Efek ketik */
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

/* Highlight menu aktif */
document.querySelectorAll('.nav-item > .nav-link:not(.dropdown-toggle)').forEach(link => {
  link.addEventListener('click', function() {
    document.querySelectorAll('.nav-item').forEach(li => li.classList.remove('active'));
    this.parentElement.classList.add('active');
  });
});

/* Smooth scroll */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function (e) {
    const href = this.getAttribute("href");
    if (href === "#") return;
    const target = document.querySelector(href);
    if (target) {
      e.preventDefault();
      const navbarHeight = document.querySelector(".navbar").offsetHeight + document.querySelector(".menu-strip").offsetHeight;
      const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight + 10;
      window.scrollTo({ top: targetPosition, behavior: "smooth" });
    }
  });
});

/* Submenu dropend */
document.querySelectorAll('.dropend .dropdown-toggle').forEach(function (element) {
  element.addEventListener('click', function (e) {
    e.stopPropagation();
    this.nextElementSibling.classList.toggle('show');
  });
});

/* Perbaikan dropdown di dalam dropdown */
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".dropdown-menu .dropdown-toggle").forEach(function (dropdownToggle) {
        dropdownToggle.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            let submenu = this.nextElementSibling;
            this.parentElement.parentElement.querySelectorAll(".dropdown-menu.show").forEach(function (openSub) {
                if (openSub !== submenu) openSub.classList.remove("show");
            });
            submenu.classList.toggle("show");
        });
    });
});
</script>



@stack('scripts')
</body>
</html>
