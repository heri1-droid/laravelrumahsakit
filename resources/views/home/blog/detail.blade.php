<link href="{{ asset('css/berita.css')}}" rel="stylesheet" />
<link href="{{ asset('css/home.css')}}" rel="stylesheet" />



<div style="background: radial-gradient(circle, #ffffff, #fffdf9);">
<!-- Page Header awal -->
<section class="intro-section img-download-section" id="dokter_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center header-section header-section-light">
                <h1 class="mb-0 text-light">Berita</h1>
                <small class="text-light">RSI Ar-Rasyid Palembang</small>
            </div>
        </div>
    </div>
</section>
<!-- Page Header End -->

<section id="detail" style="margin-top: 10px;" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3" style="text-decoration: none;">
            <a href="/">Home</a> &nbsp;/<a href="/blog" > Berita&nbsp;</a> / {{ $artikel->judul }}
        </div>
        <img src="{{ asset("/storage/artikel/{$artikel->image}") }}" class="rounded shadow-sm" width="900" height="600">
        <div class="konten-berita">
            <p class="mb-3 text-secondary">{{ $artikel->created_at->format('Y-m-d') }}</p>
            <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
            <p class="text-secondary">{!! $artikel->desc !!}</p>
        </div>
    </div>
</section>
</div>