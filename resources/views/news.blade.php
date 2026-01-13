@extends('layouts.app')

@section('title', 'News - Educa Studio')

@section('content')
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="section banner-page justify-content-center" data-aos="fade-up" data-aos-duration="500">
  <div class="content-wrap pos-relative">
    <div class="d-flex justify-content-center mb-3">
      <div class="page-heading">News</div>
    </div>

    <div class="d-flex justify-content-center mb-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/" class="page-sub-heading text-warning">Home</a>
          </li>
          <li class="breadcrumb-item text-warning active page-sub-heading">News</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<div class="row pt-5 g-5 align-items-center">

    <div class="col-md-4">
    <div class="brand-card text-center h-100">
        <img src="https://www.educastudio.com/uploads/news/889109180_20251127_095213.png"
             class="img-fluid mb-3"
             style="max-height:180px; border-radius:14px;"
             alt="Marbel">

        <h4 class="fw-semibold">Riri x Miu Baby: Petualangan Seru Bersama Teman Baru!</h4>
        <p class="text-muted">
            Riri x Miu Baby: Petualangan Seru Bersama Teman Baru!
        </p>
    </div>
    </div>
</div>

@endsection
</div>