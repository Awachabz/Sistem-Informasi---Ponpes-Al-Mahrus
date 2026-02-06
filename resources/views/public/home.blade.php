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
      width: 60px;
      height: 60px;
      background: rgba(0,0,0,0.3);
      border-radius: 8px;
      top: 50%;
      transform: translateY(-50%);
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background: rgba(0,0,0,0.5);
    }

    /* Garis putih atas */
    .carousel-separator-top {
      height: 15px;
      background-color: #fff;
      width: 100%;
    }

    /* Garis putih bawah — dibuat lebih tipis */
    .carousel-separator-bottom {
      height: 6px;
      background-color: #fff;
      width: 100%;
    }
  </style>

  <!-- Garis putih di atas carousel -->
  <div class="carousel-separator-top"></div>

  <section id="beranda" class="hero p-0">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/slide01.jpg') }}" class="d-block w-90 carousel-placeholder" alt="slide1" 
               onerror="this.src='https://via.placeholder.com/1600x600?text=Slide+1'">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/slide02.jpg') }}" class="d-block w-100 carousel-placeholder" alt="slide2" 
               onerror="this.src='https://via.placeholder.com/1600x600?text=Slide+2'">
        </div>
        <!-- <div class="carousel-item">
          <img src="{{ asset('images/slides.jpeg') }}" class="d-block w-100 carousel-placeholder" alt="slide3" 
               onerror="this.src='https://via.placeholder.com/1600x600?text=Slide+3'">
        </div> -->
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

  <!-- Garis putih bawah yang lebih tipis -->
  <div class="carousel-separator-bottom"></div>
@endsection
