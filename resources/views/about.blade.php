@extends('layouts.app')

@section('title', 'Tentang - Educa Studio')

@section('content')
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<!-- ================= BANNER ================= -->
<div class="section banner-page justify-content-center" data-aos="fade-up" data-aos-duration="500">
  <div class="content-wrap pos-relative">
    <div class="d-flex justify-content-center mb-3">
      <div class="page-heading">Tentang</div>
    </div>

    <div class="d-flex justify-content-center mb-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/" class="page-sub-heading text-warning">Home</a>
          </li>
          <li class="breadcrumb-item active text-warning page-sub-heading">Tentang</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<div class="container">
    <div class="py-4"></div>

    <div class="row align-items-end">
        <div class="col-12">
            <h2 class="text-center aos-init aos-animate" 
                data-aos="fade-up" 
                data-aos-duration="500" 
                data-aos-anchor-placement="top-bottom" 
                data-aos-delay="100">
                Tentang Educa Studio
            </h2>

            <div class="py-4"></div>

            <div class="row aos-init aos-animate" 
                 data-aos="fade-up" 
                 data-aos-duration="500" 
                 data-aos-anchor-placement="top-bottom" 
                 data-aos-delay="150">

                <div class="col-sm-5 col-12 mb-4 mb-sm-0 text-center">
                    <img src="https://www.educastudio.com/img/about/logo-educa.png" alt="Logo Educa Studio">
                </div>

                <div class="col-sm-7 col-12">
                    <div id="content" class="px-4 px-sm-0">
                        <p>
                            <span style="color: #f2762e;">
                                PT Educa Sisfomedia Indonesia (Educa Studio) 
                            </span>
                            <span style="color: #1e1e1e;">
                                merupakan pengembang media pendidikan berbasis 
                                <em>games</em>, buku, dan animasi. Kami berkomitmen penuh 
                                untuk menghadirkan proses belajar yang 
                                <span style="color: #f2762e;"><em>CEMUMU</em></span> 
                                (Cepat Tepat, Mudah-Murah, dan Muenyenangkan).
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
</div>