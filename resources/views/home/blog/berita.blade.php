<link href="{{ asset('css/berita.css')}}" rel="stylesheet" />

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
  <section  data-aos="fade-up" data-aos-duration="900">
    <div class="container" >
      <div class="row">
        @foreach ($artikels as $item)
        <div class="col-lg-4">
          <div class="card border-0 card-artikel">
            <img src="{{ asset("/storage/artikel/{$item->image}") }}" class="img-fluid mb-2 rounded-image" alt="">
            <div class="konten-berita">
              <p class="mb-3 text-secondary">{{ $item->created_at->format('Y-m-d') }}</p>
              <h4 class="fw-bold mb-3">{{ $item->judul}}</h4>
              <p class="text-secondary">#rsiarrasyid</p>
              <a href="/detail/{{$item->slug}}"
                class="text-dexoration-none text-danger {{ Request::is('blog') ? 'active' : ''}}">Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
<div class="d-flex justify-content-center mt-4 mb-5">
  {{ $artikels->links() }}
</div>
</div>
