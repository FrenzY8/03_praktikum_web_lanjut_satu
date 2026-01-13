@extends('layouts.app')

@section('title', 'Kolak - Educa Studio')

@section('content')
<link rel="stylesheet" href="{{ asset('style.css') }}">

{{-- HERO SECTION --}}
<section style="
    border-radius: 14px;
    background:
        linear-gradient(90deg, rgba(122,61,184,0.85), rgba(242,166,45,0.85)),
        url('{{ asset('images/kabi.png') }}');
    background-size: cover;
    background-position: right center;">
    <div class="container py-5 text-white">
        <div class="row align-items-center">
            <div class="col-md-5 ps-md-5">
                <h1 class="fw-bold display-5">Kabi</h1>
                <p class="fs-5">
                    Brand pendidikan keluarga muslim melalui cerita, permainan, lagu, dan animasi. Kabi telah dikembangkan di berbagai media dan platform distribusi.
                </p>
                <a href="#" class="btn btn-light rounded-pill px-4 py-2">
                    Pelajari lebih lanjut
                </a>
            </div>
        </div>
    </div>
</section>

<section class="text-center mb-5">
    <h2 class="fw-bold mb-3 pt-4">Mari belajar sambil bermain</h2>
    <p class="text-muted">
        Brand-brand Educa Studio untuk pertumbuhan dan perkembangan anak
    </p>
</section>

<div class="row g-5 align-items-center">

    <div class="col-md-4">
    <div class="brand-card text-center h-100">
        <img src="https://www.educastudio.com/uploads/brand/12_20201228_095009.png"
             class="img-fluid mb-3"
             style="max-height:180px; border-radius:14px;"
             alt="Marbel">

        <h4 class="fw-semibold">Marbel</h4>
        <p class="fw-semibold">Mari Belajar Sambil Bermain</p>
        <p class="text-muted">
            Brand game edukasi untuk anak umur 2–6 tahun.
            Terdiri atas pembelajaran dasar, aktivitas kreatif,
            pengenalan berbagai profesi dan kebiasaan-kebiasaan baik.
        </p>
    </div>
    </div>

    <div class="col-md-4">
    <div class="brand-card text-center h-100">
        <img src="https://www.educastudio.com/uploads/brand/4_20201228_094944.png"
             class="img-fluid mb-3"
             style="max-height:180px; border-radius:14px;"
             alt="Marbel">

        <h4 class="fw-semibold">Riri</h4>
        <p class="fw-semibold">Cerita Anak Interaktif</p>
        <p class="text-muted">
            Brand buku cerita digital dan serial animasi untuk anak. Dilengkapi dengan animasi yang keren dan ilustrasi yang menarik, Riri telah dikembangkan dalam berbagai platform.
        </p>
    </div>
    </div>

    <div class="col-md-4">
    <div class="brand-card text-center h-100">
        <img src="https://www.educastudio.com/uploads/brand/70_20201228_094916.png"
             class="img-fluid mb-3"
             style="max-height:180px; border-radius:14px;"
             alt="Marbel">

        <h4 class="fw-semibold">Kabi</h4>
        <p class="fw-semibold">Kisah Teladan Nabi</p>
        <p class="text-muted">
            Brand pendidikan keluarga muslim melalui cerita, permainan, lagu, dan animasi. Kabi telah dikembangkan di berbagai media dan platform distribusi.
        </p>
    </div>
    </div>
</div>

<section class="mb-5">
    <div class="container">

        <!-- JUDUL -->
        <div class="text-center mb-5">
            <h2 class="fw-bold pt-4">Mengapa belajar bersama EDUCA?</h2>
            <p class="text-muted mt-3">
                Aplikasi dan konten pembelajaran interaktif dirancang khusus untuk putra-putri Anda.
                Dunia belajar menjadi lebih menyenangkan.
            </p>
        </div>

        <!-- CONTENT -->
        <div class="row g-4 justify-content-center">

            <div class="col-md-4 scroll-animate">
                <div class="brand-card text-center h-100">
                    <img src="https://www.educastudio.com/img/index/mengapa-belajar-1.png?v=1.0"
                         class="img-fluid mb-3"
                         style="max-height:180px; border-radius:14px;"
                         alt="Ramah Anak">

                    <h4 class="fw-semibold">Ramah Anak</h4>
                    <p class="text-muted">
                        Seluruh konten EDUCA aman untuk anak karena telah melewati proses QA yang ketat.
                    </p>
                </div>
            </div>

            <div class="col-md-4 scroll-animate">
                <div class="brand-card text-center h-100">
                    <img src="https://www.educastudio.com/img/index/mengapa-belajar-2.png?v=1.0"
                         class="img-fluid mb-3"
                         style="max-height:180px; border-radius:14px;"
                         alt="Interaktif">

                    <h4 class="fw-semibold">Dirancang Khusus</h4>
                    <p class="text-muted">
                        Dirancang oleh ahlinya dan dikhususkan untuk menunjang pertumbuhan perkembangan anak
                    </p>
                </div>
            </div>

            <div class="col-md-4 scroll-animate">
                <div class="brand-card text-center h-100">
                    <img src="https://www.educastudio.com/img/index/mengapa-belajar-3.png?v=1.0"
                         class="img-fluid mb-3"
                         style="max-height:180px; border-radius:14px;"
                         alt="Terpercaya">

                    <h4 class="fw-semibold">Kualitas Terjamin</h4>
                    <p class="text-muted">
                        Proses produksi yang dikerjakan oleh ahlinya di setiap bidang, kualitas terbaik di kelasnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-center mb-5">
    <h2 class="fw-bold mb-3 pt-4">Marbel Learning Video</h2>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow">
                    <iframe
                        src="https://www.youtube.com/embed/UjhYKCn_I3M"
                        title="Marbel Learning Video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="fw-semibold mb-3">Video Belajar Bersama Marbel</h4>
                <p class="text-muted mb-3">
                    Pada video ini, Anda dapat menemukan series lengkap Marbel
                    untuk digunakan belajar sambil bermain oleh putra-putri Anda.
                </p>
                <p class="text-muted">
                    Belajar mengenal angka hingga warna, tata surya hingga
                    transportasi, semuanya lengkap dan telah dikemas secara
                    menarik dalam bentuk animasi singkat.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5 scroll-animate">
            <h2 class="fw-bold">Penghargaan</h2>
            <p class="text-muted">
                Educa Studio telah meraih berbagai penghargaan baik nasional maupun internasional
            </p>
        </div>

        <!-- AWARDS GRID -->
        <div class="row g-4 justify-content-center">

            <!-- ITEM -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 scroll-animate">
                <a href="https://duniaku.idntimes.com/game/konsol-pc/febrianto-nur-anwari/inilah-tiga-game-pemenang-increfest-2012"
                   target="_blank"
                   class="award-card">
                    <img src="https://www.educastudio.com/uploads/awards/1031995931_20201231_135447.png"
                         class="img-fluid"
                         alt="Award">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 scroll-animate">
                <a href="https://duniaku.idntimes.com/game/konsol-pc/febrianto-nur-anwari/mengenal-lebih-dekat-marbel-jawara-inaicta-2013-untuk-kategori-edugames"
                   target="_blank"
                   class="award-card">
                    <img src="https://www.educastudio.com/uploads/awards/462501512_20201231_135516.png"
                         class="img-fluid"
                         alt="Award">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 scroll-animate">
                <div class="award-card">
                    <img src="https://www.educastudio.com/uploads/awards/1233509328_20201231_135543.png"
                         class="img-fluid"
                         alt="Award">
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 scroll-animate">
                <div class="award-card">
                    <img src="https://www.educastudio.com/uploads/awards/1526368077_20201231_135626.png"
                         class="img-fluid"
                         alt="Award">
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 scroll-animate">
                <div class="award-card">
                    <img src="https://www.educastudio.com/uploads/awards/1367291327_20201231_135710.png"
                         class="img-fluid"
                         alt="Award">
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 scroll-animate">
                <div class="award-card">
                    <img src="https://www.educastudio.com/uploads/awards/374648982_20201231_135731.png"
                         class="img-fluid"
                         alt="Award">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="about-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <div
        class="col-lg-6 col-md-12 mb-4 mb-lg-0"
        data-aos="fade-right"
        data-aos-duration="600"
        data-aos-offset="120"
      >
        <h2 class="about-title mb-3">
          Tentang Kami
        </h2>

        <p class="about-desc">
          <span class="brand-orange">PT Educa Sisfomedia Indonesia (Educa Studio)</span>
          merupakan pengembang media pendidikan berbasis
          <em>games</em>, buku, dan animasi.
          Kami berkomitmen penuh untuk menghadirkan proses belajar yang
          <span class="brand-orange"><em>CEMUMU</em></span>
          (Cepat Tepat, Mudah-Murah, dan Menyenangkan).
        </p>

        <a href="/about-us" class="about-link">
          Selengkapnya <i class="fa fa-arrow-right ms-1"></i>
        </a>
      </div>

      <div
        class="col-lg-6 col-md-12 text-center"
        data-aos="fade-left"
        data-aos-duration="600"
        data-aos-offset="120"
      >
        <img
          src="https://www.educastudio.com/img/teacher_promo.png"
          alt="Educa Studio Teacher"
          class="img-fluid about-image"
          loading="lazy"
        >
      </div>

    </div>
  </div>
</section>

@endsection
</div>