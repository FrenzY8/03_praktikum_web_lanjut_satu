@extends('layouts.app')

@section('title', 'Contact - Educa Studio')

@section('content')
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- ================= BANNER ================= -->
<div class="section banner-page justify-content-center" data-aos="fade-up" data-aos-duration="500">
  <div class="content-wrap pos-relative">
    <div class="d-flex justify-content-center mb-3">
      <div class="page-heading">Contact</div>
    </div>

    <div class="d-flex justify-content-center mb-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/" class="page-sub-heading text-warning">Home</a>
          </li>
          <li class="breadcrumb-item active text-warning page-sub-heading">Contact</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<div class="container">
    <div class="py-3 py-md-4"></div>

    <div class="row rs-contact-us aos-init aos-animate" 
         data-aos="fade-up" 
         data-aos-duration="500" 
         data-aos-anchor-placement="top-bottom" 
         data-aos-delay="200">

        <!-- Contact Info -->
        <div class="col-12 col-lg-5 col-xl-6 col-md-12 px-4 pt-4 pb-1">
            <div class="row">

                <!-- Alamat -->
                <div class="d-flex col-lg-12 col-sm-12 col-md-7 col-12 mb-4">
                    <div>
                        <i class="fa fa-map-marker text-brown icon-rounded"></i>
                    </div>
                    <div class="col-12">
                        <p class="vag mb-2">Alamat</p>
                        <p class="text-dark small mb-2">
                            Jl. Gilingrejo No. 10 Salatiga, Jawa Tengah 50743
                        </p>
                    </div>
                </div>

                <!-- Email -->
                <div class="d-flex col-lg-12 col-sm-12 col-md-5 col-12 mb-4">
                    <div>
                        <i class="fa fa-envelope text-brown icon-rounded"></i>
                    </div>
                    <div class="col-12">
                        <p class="vag mb-2">Email</p>
                        <a class="small mb-2" href="mailto:cs@educastudio.com">
                            cs@educastudio.com
                        </a>
                    </div>
                </div>

                <!-- Telepon -->
                <div class="d-flex col-lg-12 col-sm-12 col-md-7 col-12 mb-4">
                    <div>
                        <i class="fa fa-phone text-brown icon-rounded"></i>
                    </div>
                    <div class="col-12">
                        <p class="vag mb-2">Telepon</p>
                        <p class="text-dark small mb-2">(+62) 298 6031005</p>
                    </div>
                </div>

                <!-- Whatsapp -->
                <div class="d-flex col-lg-12 col-sm-12 col-md-5 col-12">
                    <div>
                        <i class="fa fa-whatsapp text-brown icon-rounded"></i>
                    </div>
                    <div class="col-12">
                        <p class="vag mb-2">Whatsapp</p>
                        <a class="small mb-2" 
                           href="https://api.whatsapp.com/send?phone=6281323844339" 
                           target="_blank">
                           0813-2384-4339
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Google Maps -->
        <div class="col-lg-7 col-xl-6 pb-lg-0 pb-md-4 pb-4">
            <div class="rs-google-maps d-flex justify-content-center">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7914.266382974849!2d110.50893200000002!3d-7.338936!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52c38597973ed751!2sEduca%20Studio!5e0!3m2!1sid!2sus!4v1606008007059!5m2!1sid!2sus" 
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0" 
                    class="google-maps">
                </iframe>
            </div>
        </div>

    </div>

    <div class="py-3 py-md-4"></div>
</div>

@endsection
</div>