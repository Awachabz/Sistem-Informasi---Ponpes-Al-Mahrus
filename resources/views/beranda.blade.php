@extends('layouts.app')

@section('content')
  <style>
    /* Atur ukuran slide agar sesuai layar laptop */
    .carousel-placeholder {
      max-height: 600px;   /* tinggi maksimal 600px */
      width: 100%;         /* full width */
      object-fit: cover;   /* agar gambar tetap proporsional */
    }

    /* Kotak transparan untuk tombol prev/next */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-size: 50%, 50%;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 60px; /* lebar tombol */
      height: 60px; /* tinggi tombol */
      background: rgba(0,0,0,0.3); /* kotak transparan */
      border-radius: 8px; /* sudut kotak membulat */
      top: 50%; /* posisikan di tengah vertikal */
      transform: translateY(-50%);
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background: rgba(0,0,0,0.5); /* lebih gelap saat hover */
    }
  </style>

  <section id="beranda" class="hero p-0">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/slide1.jpeg') }}" class="d-block w-100 carousel-placeholder" alt="slide1" 
               onerror="this.src='https://via.placeholder.com/1600x600?text=Slide+1'">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/slide2.jpeg') }}" class="d-block w-100 carousel-placeholder" alt="slide2" 
               onerror="this.src='https://via.placeholder.com/1600x600?text=Slide+2'">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/slide3.jpeg') }}" class="d-block w-100 carousel-placeholder" alt="slide3" 
               onerror="this.src='https://via.placeholder.com/1600x600?text=Slide+3'">
        </div>
      </div>

      <!-- Tombol Prev & Next -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Berikutnya</span>
      </button>
    </div>
  </section>
@endsection
