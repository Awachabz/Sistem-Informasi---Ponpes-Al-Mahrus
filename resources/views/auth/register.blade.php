<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - Ponpes Al-Mahrus</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}?v={{ time() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #8fd694; /* hijau daun muda */
      min-height: 100vh;
      margin: 0;
      font-family: "Poppins", system-ui, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .register-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 90%;
      max-width: 1200px;
    }

    /* KIRI - Logo */
    .left-side {
      flex: 1;
      display: flex;
      justify-content: flex-start; /* tempel ke kiri */
      align-items: center;
    }

    .left-side img {
      width: 400px;
      max-width: 100%;
      margin-left: -30px; /* geser sedikit agar benar2 mepet kiri */
      filter: drop-shadow(0 8px 15px rgba(0, 0, 0, 0.15));
    }

    /* KANAN - Form */
    .right-side {
      flex: 1;
      background: #ffffff;
      padding: 3rem;
      border-radius: 25px;
      box-shadow: 0 0 25px rgba(0,0,0,0.15);
    }

    .right-side h2 {
      color: #198754;
      font-weight: bold;
      margin-bottom: 1.8rem;
      text-align: center;
    }

    .form-control {
      border-radius: 12px;
      padding: 10px;
    }

    .btn-register {
      background-color: #198754;
      color: white;
      border: none;
      border-radius: 12px;
      padding: 0.6rem 1.5rem;
      transition: all 0.3s ease;
    }

    .btn-register:hover {
      background-color: #157347;
      transform: translateY(-2px);
    }

    .login-link {
      color: #198754;
      text-decoration: none;
      font-weight: 500;
    }

    .login-link:hover {
      text-decoration: underline;
      color: #0f5132;
    }

    /* Responsif */
    @media (max-width: 768px) {
      body {
        background: #ffffff;
      }
      .register-container {
        flex-direction: column;
        text-align: center;
      }
      .left-side {
        justify-content: center;
        margin-bottom: 1rem;
      }
      .left-side img {
        width: 200px;
        margin-left: 0;
      }
      .right-side {
        margin: 0;
        padding: 2rem;
        box-shadow: none;
      }
    }
  </style>
</head>
<body>
  <div class="register-container">
    <!-- Logo kiri -->
    <div class="left-side">
      <img src="{{ asset('images/logo.png') }}" alt="Logo Ponpes Al-Mahrus">
    </div>

    <!-- Form kanan -->
    <div class="right-side">
      <h2>Daftar Akun Baru</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
          @error('name')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
          @error('email')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Kata Sandi</label>
          <input id="password" type="password" class="form-control" name="password" required>
          @error('password')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
          <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
          @error('password_confirmation')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
          <a href="{{ route('login') }}" class="login-link">Sudah punya akun?</a>
          <button type="submit" class="btn-register">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
