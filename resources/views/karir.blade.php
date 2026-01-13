@extends('layouts.app')

@section('title', 'Karir - Educa Studio')

@section('content')
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<!-- ================= BANNER ================= -->
<div class="section banner-page justify-content-center" data-aos="fade-up" data-aos-duration="500">
  <div class="content-wrap pos-relative">
    <div class="d-flex justify-content-center mb-3">
      <div class="page-heading">Karir</div>
    </div>

    <div class="d-flex justify-content-center mb-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/" class="page-sub-heading text-warning">Home</a>
          </li>
          <li class="breadcrumb-item text-warning active page-sub-heading">Karir</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<!-- ================= LIST KARIR ================= -->
<div class="section">
  <div id="karir" class="container">

    <div class="pt-5"></div>

    <!-- SEARCH -->
    <div class="input-group mb-0" data-aos="fade-up" data-aos-delay="400">
    <input
    type="text"
    id="input-search"
    class="form-control"
    placeholder="Cari pekerjaan impianmu di sini"
    >
    <span class="input-group-append">
    <button
      id="btn-search"
      class="btn btn-primary-search"
      style="min-width:50px"
    >
      <i class="bi bi-search"></i>
    </button>
    </span>
    </div>


    <div class="pt-3"></div>

    <!-- CARD -->
    <div class="row pb-4">
      <div class="col-sm-12 col-md-6 col-lg-4 pt-3 pb-2" data-aos="fade-up">
        <div class="rs-karir-1 h-100" data-aos="fade-up" data-aos-delay="600">

          <div class="media-box">
            <a href="/program/karir/audio-engineer">
              <img
                src="https://www.educastudio.com/uploads/program/1145291002_20250604_090942.png"
                class="card-img-top"
                alt="Audio Engineer"
              >
            </a>
          </div>

          <div class="body-box flex-fill">
            <div class="text-dark pt-2">
              <a
                href="/program/karir/audio-engineer"
                class="line-clamp-1 vag"
              >
                Audio Engineer
              </a>
            </div>

            <div class="mb-3 small">
              <div class="py-2">
                <a
                  href="/program/karir/audio-engineer"
                  class="btn btn-primary btn-sm btn-block py-1"
                >
                  Lamar pekerjaan
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- LOAD MORE -->
    <div class="text-center my-4" data-aos="fade-up">
      <button class="btn btn-primary-hover btn-promo vag py-1 d-none">
        Tampilkan lebih sedikit
      </button>
    </div>

  </div>
</div>
</div>

<div class="align-items-end pb-2">
	<div class="col-sm-12 col-md-12 col-lg-12 text-center pb-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="top-bottom" data-aos-delay="900">
	<h2 class="">
		Educa Studio Workspace
	</h2>
    <p class="text-secondary">Lingkungan kerja yang nyaman dan mendukung tim bekerja maksimal</p>
	</div>

    <div data-aos="fade-in" data-aos-duration="500" data-aos-anchor-placement="top-bottom" data-aos-delay="1000" class="aos-init aos-animate">
        <img src="https://www.educastudio.com/img/career/educa-studio-working-environments.png" alt="Educa Studio Workspace" class="img-workspace">
    </div>
</div>

@endsection
</div>