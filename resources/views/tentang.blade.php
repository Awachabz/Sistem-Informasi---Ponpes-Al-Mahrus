@extends('layouts.app')

@section('content')
<div id="tentang" class="py-5">
  <div class="container section-title text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold text-success">Tentang Kami</h2>
  </div>

  <div class="container">
    <div class="row gy-5 align-items-center">

      <!-- Gambar -->
      <div class="col-lg-6 text-center" data-aos="fade-right" data-aos-delay="100">
        <img src="{{ asset('images/logo.png') }}" 
             alt="Tentang Kami" 
             class="img-fluid rounded shadow-sm" 
             style="max-width: 70%; height: auto;">
      </div>

      <!-- Profil Singkat -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <h3 class="fw-bold text-dark mb-3">Profil Singkat</h3>
        <p style="font-size: 18px; text-align: justify;">
          Pondok Pesantren <strong>Al-Mahrus</strong> adalah lembaga pendidikan Islam yang berkomitmen membina santri dalam bidang keagamaan, pendidikan formal, serta pembentukan akhlakul karimah.
        </p>
        <ul class="list-unstyled">
          <li><i class="bi bi-check2-circle text-success"></i> <span>Mengembangkan potensi santri di bidang keilmuan dan spiritual.</span></li>
          <li><i class="bi bi-check2-circle text-success"></i> <span>Menjalin kerja sama dengan masyarakat dan lembaga pendidikan lain.</span></li>
          <li><i class="bi bi-check2-circle text-success"></i> <span>Mendorong kedisiplinan dan kemandirian santri melalui berbagai kegiatan.</span></li>
        </ul>
      </div>
    </div>

    <!-- Visi & Misi sejajar (tanpa menyamakan tinggi box) -->
    <div class="row gy-4 mt-5">

      <!-- Visi -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 border border-success rounded-3 shadow-sm">
          <h3 class="text-dark fw-bold mb-3">Visi</h3>
          <p style="font-size: 18px; text-align: justify; margin: 0;">
            Menjadi lembaga pendidikan Islam yang mencetak generasi emas yang berilmu, beriman, dan berakhlakul karimah, serta tetap berpegang teguh pada nilai-nilai salaf demi kemaslahatan umat dan kemajuan bangsa.
          </p>
        </div>
      </div>

      <!-- Misi -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 border border-success rounded-3 shadow-sm h-100">
          <h3 class="text-dark fw-bold mb-3">Misi</h3>
          <ul style="font-size: 18px; margin: 0; padding-left: 20px; text-align: justify;">
            <li>Menanamkan nilai-nilai keislaman dan akhlakul karimah berdasarkan ajaran salafus shalih.</li>
            <li>Mengembangkan potensi santri agar menjadi generasi unggul, mandiri, dan bermanfaat bagi masyarakat.</li>
            <li>Meningkatkan mutu pendidikan yang mengintegrasikan ilmu agama dan ilmu pengetahuan umum.</li>
            <li>Menumbuhkan semangat cinta tanah air serta kepedulian sosial dalam kehidupan bermasyarakat.</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
