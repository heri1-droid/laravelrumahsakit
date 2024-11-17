<!-- Jumbotron Awal -->

<div class="container-fluid banner">
  <div class="container text-end">
    <div class="sliding-text">
      <h4 class="display-4 slide active" style="font-size: calc(1.5rem + 1vw); font-weight: bold; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
        RSI AR-RASYID PALEMBANG
      </h4>
      <h4 class="display-4 slide" style="font-size: calc(1.5rem + 1vw); font-weight: bold; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
        MODERN PROFESIONAL
      </h4>
      <h4 class="display-4 slide" style="font-size: calc(1.5rem + 1vw); font-weight: bold; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
        Kesehatan Berlandaskan Iman
      </h4>
    </div><br><br>
    <h3 class="display-6" data-aos="fade-up" data-aos-duration="1000"
      style="font-size: calc(1rem + 0.5vw); font-family: sans-serif; letter-spacing: 2px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); margin-top: 15px;">
      "Pelayananku Ibadahku"
    </h3>
    <a href="profil">
      <button class="btn btn-success btn-sm oke" type="button">
        Selengkapnya...
      </button>
    </a>
  </div>
</div>

<script>
  const slides = document.querySelectorAll('.sliding-text .slide');
  let currentIndex = 0;

  function showNextSlide() {
    slides[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add('active');
  }

  setInterval(showNextSlide, 4000);
</script>

<style>
  .sliding-text {
    position: relative;
  }

  .sliding-text .slide {
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0;
    transform: translateX(100%);
    transition: opacity 1s ease-in-out, transform 1s ease-in-out;
  }

  .sliding-text .slide.active {
    opacity: 1;
    transform: translateX(0);
  }
</style>

<!-- <div class="container-fluid banner">
  <div class="container text-end">
    <h4 class="display-4" data-aos="fade-up" data-aos-duration="800"
      style="font-size: calc(1.5rem + 1vw); font-weight: bold; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
      RSI AR-RASYID PALEMBANG</h4>
    <h3 class="display-6" data-aos="fade-up" data-aos-duration="1000"
      style="font-size: calc(1.2rem + 0.5vw); font-family: sans-serif; letter-spacing: 2px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); margin-top: 15px;">
      "Pelayananku Ibadahku"</h3>
    <a href="#layanan">
      <button class="btn btn-success btn-sm oke" type="button">
        Selengkapnya...
      </button>
    </a>
  </div>
</div> -->
<!-- Jumbotron Akhir -->

<!-- <script>
    const images = [
        "{!! asset('img/gerbang.jpg') !!}",
        "{!! asset('img/home30.jpg') !!}",
        "{!! asset('img/image3.jpg') !!}"
    ];

    let currentIndex = 0;
    const banner = document.querySelector('.banner');

    function changeBackground() {
        currentIndex = (currentIndex + 1) % images.length;
        banner.style.backgroundImage = `url('${images[currentIndex]}')`;
    }

    setInterval(changeBackground, 5000); // Ganti gambar setiap 5 detik
</script> -->



<!-- Kolom Awal -->
<section>
  <div class="container custom-size">
    <div class="section-content">
      <div class="row mt-sm-20" style="margin-top: -70px;">
        <!-- Kolom 1 -->
        <div class="col-12 col-md-4 d-flex align-items-stretch">
          <div class="custom-box  text-center">
            <a href="{{ url('/profil') }}?scroll=visi" class="{{ Request::is('profil') ? 'active' : ''}}">
              <img src="{{ asset('img/islam.png') }}" alt="Visi & Misi" class="icon-green icon-spacing img-fluid">
              <h5 class="text-uppercase text-custom mt-2">Visi & Misi</h5>
            </a>
          </div>
        </div>
        <!-- Kolom 2 -->
        <div class="col-12 col-md-4 d-flex align-items-stretch">
          <div class="custom-box text-center">
            <a href="{{ url('/profil') }}#sejarah" class="{{ Request::is('sejarah') ? 'active' : ''}}">
              <!-- <a href="/profil" class="{{ Request::is('sejarah') ? 'active' : ''}}"> -->
              <img src="{{ asset('img/hospital.png') }}" alt="Sejarah" class="icon-green icon-spacing img-fluid">
              <h5 class="text-uppercase text-custom mt-2">Sejarah</h5>
            </a>
          </div>
        </div>
        <!-- Kolom 3 -->
        <div class="col-12 col-md-4 d-flex align-items-stretch">
          <div class="custom-box text-center">
            <a href="{{ url('/') }}#mitra" class="{{ Request::is('mitra') ? 'active' : ''}}">
              <img src="{{ asset('img/medal.png') }}" alt="Dakwah & Kemitraan" class="icon-green icon-spacing img-fluid">
              <h5 class="text-uppercase text-custom mt-2">Dakwah & Kemitraan</h5>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Kolom Akhir -->