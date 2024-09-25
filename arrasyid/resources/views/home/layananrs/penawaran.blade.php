<link href="{{ asset('css/berita.css')}}" rel="stylesheet" />
<!-- <link href="{{ asset('css/detail/bootstrap.css')}}" rel="stylesheet" /> -->
<!-- <link href="{{ asset('css/detail/theme.css')}}" rel="stylesheet" /> -->

<div style="background: radial-gradient(circle, #ffffff, #fffdf9);">
<!-- Page Header awal -->
<section class="intro-section img-download-section" id="dokter_banner" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center header-section header-section-light">
                <!-- Mengganti $item dengan $layanan -->
                <h1 class="mb-0 text-light">Layanan {{ $layanan->layanan }}</h1>
                <small class="text-light">RSI Ar-Rasyid Palembang</small>
            </div>
        </div>
    </div>
</section>
<!-- Page Header End -->

<section id="detail">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3" style="text-decoration: none;">
            <a href="/">Home</a> &nbsp;/<a href="/layananrs"> Layanan&nbsp;</a> / {{ $layanan->layanan }}
        </div>
        <div class="konten-berita">
            <p class="text-secondary">{!! $layanan->desc !!}</p>
        </div>
    </div>
</section>
</div>






