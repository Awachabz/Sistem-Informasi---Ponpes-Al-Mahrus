<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Ponpes Al-Mahrus</title>
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

    .login-container {
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
      justify-content: flex-start;
      align-items: center;
    }

    .left-side img {
      width: 400px;
      max-width: 100%;
      margin-left: -30px;
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

    .btn-login {
      background-color: #198754;
      color: white;
      border: none;
      border-radius: 12px;
      padding: 0.6rem 1.5rem;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      background-color: #157347;
      transform: translateY(-2px);
    }

    .register-link {
      color: #198754;
      text-decoration: none;
      font-weight: 500;
    }

    .register-link:hover {
      text-decoration: underline;
      color: #0f5132;
    }

    .alert {
      border-radius: 10px;
    }

    /* Responsif */
    @media (max-width: 768px) {
      body {
        background: #ffffff;
      }
      .login-container {
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
  <div class="login-container">
    <!-- Logo kiri -->
    <div class="left-side">
      <img src="{{ asset('images/logo.png') }}" alt="Logo Ponpes Al-Mahrus">
    </div>

    <!-- Form kanan -->
    <div class="right-side">
      <h2>Masuk ke Akun</h2>

      @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
      @endif
      @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
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

        <div class="mb-3 form-check">
          <input type="checkbox" name="remember" class="form-check-input" id="remember">
          <label for="remember" class="form-check-label">Ingat saya</label>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
          <a href="#" class="register-link">Lupa password?</a>
          <button type="submit" class="btn-login">Masuk</button>
        </div>
      </form>

      <div class="text-center mt-3">
        Belum punya akun? <a href="{{ route('register') }}" class="register-link">Daftar di sini</a>
      </div>
    </div>
  </div>
</body>
</html>
