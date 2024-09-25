<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('img/logo2.png')}}">
  <!--icon-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>RS Islam Ar-Rasyid Palembang</title>
  <!--font-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('css/home.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/gerakan.css')}}" rel="stylesheet" />
  <link href="{{ asset('plugin/fontawesome/css/all.min.css')}}" rel="stylesheet" />

</head>

<body>
  <!-- Bagian Email dan Telepon -->
  <nav class="navbar navbar-expand-lg navbar-body-secondary bg-body-secondary" id="navbarTop">
    <div class="container-fluid">
      <ul class="navbar-nav ms-auto custom-margin">
        <!-- Email -->
        <li class="nav-item">
          <a class="nav-link icon-link" href="mailto:rs.ar.plm@gmail.com">
            <i class="fas fa-envelope"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Email<br>rs.ar.plm@gmail.com</a>
        </li>
        <!-- Telepon -->
        <li class="nav-item">
          <a class="nav-link icon-link" href="tel:07115610503">
            <i class="fas fa-phone"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Telpn/fax<br>(0711) 5610503</a>
        </li>
        <!-- Media Sosial -->
        <li class="nav-item">
          <a class="nav-link icon-link" target="_blank" href="https://www.instagram.com/rs_islam_arrasyid/">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link icon-link" target="_blank" href="https://www.youtube.com/@rs.ar-rasyidpalembang/videos">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Navigasi Utama -->
  <nav class="navbar navbar-expand-lg shadow-lg bg-light bg-gradient navbar-body-tertiary navbar-header fixed-top"
    id="navbarMain">
    <div class="container">
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-atas">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-atas">
            <a class="nav-link" href="#">Profil</a>
          </li>
          <li class="nav-atas">
            <a class="nav-link" href="#">Layanan</a>
          </li>
          <li class="nav-atas logo-item">
            <a class="nav-gas">
              <img src="{{ asset('img/logo1.png')}}" alt="Logo" class="navbar-logo">
            </a>
          </li>
          <li class="nav-atas">
            <a class="nav-link" href="#">Dokter</a>
          </li>
          <li class="nav-atas">
            <a class="nav-link" href="#">Berita</a>
          </li>
          <li class="nav-atas">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <!--Navbar header-->

  <!-- Jumbotron Awal -->
  <div class="container-fluid banner">
    <div class="container text-center">
      <h4 class="display-2"
        style="font-size: 55px; font-weight: bold; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
        RSI AR-RASYID PALEMBANG</h4>
      <h3 class="display-11"
        style="font-size: 22px; font-family: sans-serif; letter-spacing: 2px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); margin-top: 15px;">
        "Pelayananku Ibadahku"</h3>
      <a href="#layanan">
        <button class="btn btn-primary btn-sm oke" type="button">
          Selengkapnya...
        </button>
      </a>
    </div>
  </div>
  <!-- Jumbotron Akhir -->

  <!-- kolom awal -->
  <section>
    <div class="container custom-size">
      <div class="section-content">
        <div class="row mt-sm-20" style="margin-top: -70px;">
          <!-- Kolom 1 -->
          <div class="col-12 col-md-4 d-flex align-items-stretch">
            <div class="custom-box shadow-lg">
              <a href="#" class="text-center">
                <img src="{{ asset('img/islam.png') }}" alt="Visi & Misi" class="icon-green icon-spacing">
                <h5 class="text-uppercase text-custom">Visi & Misi</h5>
              </a>
            </div>
          </div>
          <!-- Kolom 2 -->
          <div class="col-12 col-md-4 d-flex align-items-stretch">
            <div class="custom-box shadow-lg">
              <a href="#" class="text-center">
                <img src="{{ asset('img/hospital.png') }}" alt="Sejarah" class="icon-green icon-spacing">
                <h5 class="text-uppercase text-custom">Sejarah</h5>
              </a>
            </div>
          </div>
          <!-- Kolom 3 -->
          <div class="col-12 col-md-4 d-flex align-items-stretch">
            <div class="custom-box shadow-lg">
              <a href="#" class="text-center">
                <img src="{{ asset('img/medal.png') }}" alt="Dakwah & Kemitraan" class="icon-green icon-spacing">
                <h5 class="text-uppercase text-custom">Dakwah & Kemitraan</h5>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- kolom akhir -->

  <!-- selamat datang awal-->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('img/dokter.png') }}" alt="Certificate" class="img-fluid custom-img">
        </div>
        <div class="col-md-8 text-content">
          <h2>Selamat datang di<br>RSI Ar-Rasyid Palembang</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ea vel ratione saepe beatae? Dolorem nemo,
            libero odit nostrum blanditiis nulla similique voluptatum laudantium optio voluptatibus commodi, dolorum
            atque placeat?</p>
          <div class="button-group">
            <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile" class="btn btn-custom"
              target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-google-play"></i> Klik Untuk Daftar Via Mobile JKN
            </a>
            <a href="https://www.instagram.com/rs_islam_arrasyid/" class="btn btn-custom" target="_blank"
              rel="noopener noreferrer">
              <i class="fa-brands fa-instagram" aria-hidden="true"></i> Klik Untuk Kunjungi Instagram Kami
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- selamat datang akhir-->

  <!-- layanan awal-->
  <section id="layanan" class="departments" style="background-color: #e4f2f1;">
    <div class="container">
      <div class="section-title text-center">
        <h2 class="layananjudul" style="margin-top: 50px;">Layanan Kami</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, et.</p>
      </div>
      <div class="row gy-4 atashemo">
        <div class="col-lg-3 okelayanan">
          <ul class="nav nav-layanan flex-column" id="myTab" role="tablist" style="margin-left: 100px;">
            <li class="nav-item" role="presentation">
              <a class="nav-linkk active" id="hemodialisa-tab" data-bs-toggle="tab" href="#hemodialisa" role="tab"
                aria-controls="hemodialisa" aria-selected="true">
                <span class="bullet-point"></span> Lorem ipsum
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="ctscan-tab" data-bs-toggle="tab" href="#ctscan" role="tab" aria-controls="ctscan"
                aria-selected="false">
                <span class="bullet-point"></span> MCU
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="endoskopi-tab" data-bs-toggle="tab" href="#endoskopi" role="tab"
                aria-controls="endoskopi" aria-selected="false">
                <span class="bullet-point"></span> Lorem ipsum
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="treadmill-tab" data-bs-toggle="tab" href="#treadmill" role="tab"
                aria-controls="treadmill" aria-selected="false">
                <span class="bullet-point"></span> Rawat Jalan
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="panoramic-tab" data-bs-toggle="tab" href="#panoramic" role="tab"
                aria-controls="panoramic" aria-selected="false">
                <span class="bullet-point"></span> IGD
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="t3t4-tab" data-bs-toggle="tab" href="#t3t4" role="tab" aria-controls="t3t4"
                aria-selected="false">
                <span class="bullet-point"></span> Fisoterapi
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-liked" id="hematologi-tab" data-bs-toggle="tab" href="#hematologi" role="tab"
                aria-controls="hematologi" aria-selected="false">
                <span class="bullet-point"></span>Selengkapnya...
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="hemodialisa" role="tabpanel" aria-labelledby="hemodialisa-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Lorem ipsum</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim laborum delectus rerum at numquam.
                    Ratione laborum enim similique. Commodi accusamus omnis repudiandae laudantium dolorem ad
                    voluptatibus odio accusantium fugit reprehenderit doloribus similique exercitationem beatae,
                    corrupti repellendus at magni, tempora harum, expedita est praesentium ipsam quae quia! Eligendi
                    asperiores repellendus alias.</p>
                  <a href="#" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/pasien.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="ctscan" role="tabpanel" aria-labelledby="ctscan-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Lorem ipsum</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam autem, eaque quam natus molestiae
                    praesentium cum beatae aperiam molestias laborum, quis cumque. Totam dolorem quibusdam voluptas
                    expedita nulla. Eveniet a libero saepe nobis, eius nulla deleniti dolores dolor ipsam minima
                    voluptates repudiandae veritatis aut expedita ratione aliquid similique aliquam est?</p>
                  <a href="#" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/pasien1.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="endoskopi" role="tabpanel" aria-labelledby="endoskopi-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Lorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, repudiandae rem voluptatem pariatur
                    iste velit dignissimos similique aliquam? Doloribus odit ratione quia ut officia aliquam nesciunt
                    quis assumenda dolore perspiciatis laudantium possimus in voluptatem aut odio, culpa nihil?
                    Laudantium fuga neque numquam? Accusantium doloribus quod voluptates beatae corporis ea hic?</p>
                  <a href="#" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/pasien.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="treadmill" role="tabpanel" aria-labelledby="treadmill-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Lorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, adipisci nemo quae aliquid tempora
                    voluptates non necessitatibus rerum ipsam temporibus illum, harum, ducimus inventore asperiores
                    voluptatem quo id nostrum maiores deleniti officia vitae ratione. Repellendus rerum illum pariatur
                    labore, quaerat culpa numquam voluptates aut laborum, optio debitis excepturi ad eaque?</p>
                  <a href="#" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/pasien1.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="panoramic" role="tabpanel" aria-labelledby="panoramic-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Lorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus velit dolorum dignissimos
                    saepe nam, delectus illum doloribus sit cupiditate tempore nihil. Alias impedit obcaecati
                    praesentium iste minima nihil autem laudantium.</p>
                  <a href="#" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/pasien.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="t3t4" role="tabpanel" aria-labelledby="t3t4-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Lorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, animi. Sunt veniam exercitationem
                    id tempore tempora ut inventore quo voluptas voluptatibus voluptatem! Aspernatur, reiciendis officia
                    placeat dignissimos ipsa incidunt quasi velit totam iure molestias laborum dolorum nostrum tenetur
                    odit perferendis sit illum adipisci minima, alias mollitia. Eum fugiat dolore voluptates!</p>
                  <a href="#" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/pasien1.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="hematologi" role="tabpanel" aria-labelledby="hematologi-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Lorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, adipisci nemo quae aliquid tempora
                    voluptates non necessitatibus rerum ipsam temporibus illum, harum, ducimus inventore asperiores
                    voluptatem quo id nostrum maiores deleniti officia vitae ratione. Repellendus rerum illum pariatur
                    labore, quaerat culpa numquam voluptates aut laborum, optio debitis excepturi ad eaque?</p>
                  <a href="#" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/pasien1.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- layanan akhir-->

  <!-- berita awal-->
  <div id="newsCarousel" class="carousel slide bg-body" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner container">
      <h1 class="text-center wow fadeInUp" style="font-size: 32px; font-weight: bold;">Berita & Informasi</h1>
      <div class="border-bottom" style="margin-top: 15px; border-bottom-width: 1px; border-bottom-color: black;"></div>
      <div class="carousel-item active">
        <div class="row mt-5">
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="{{ asset('img/news.jpg')}}" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <span>Roger Adams</span>
                  </div>
                  <span class="mai-time"></span> 1 week ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="{{ asset('img/news.jpg')}}" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <span>Roger Adams</span>
                  </div>
                  <span class="mai-time"></span> 4 weeks ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="{{ asset('img/news.jpg')}}" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_2.jpg" alt="">
                    </div>
                    <span>Diego Simmons</span>
                  </div>
                  <span class="mai-time"></span> 2 months ago
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row mt-5">
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="{{ asset('img/new-image.jpg')}}" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="blog-details.html">New Post Title</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_3.jpg" alt="">
                    </div>
                    <span>New Author</span>
                  </div>
                  <span class="mai-time"></span> Just Now
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 text-center mt-4 wow zoomIn">
      <a href="blog.html" class="btn btn-success">Lihat Semua</a>
    </div>
    <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
  <!-- berita akhir-->

  <!-- saran awal-->
  <div class="container-fluid h-100">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5 style="color: white; margin-left: 190px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">"Pelayananku
            Ibadahku"</h5>
          <h3
            style="color: #fff; margin-top: 10px; font-weight: bold; font-family: 'Cambaria', sans-serif; font-size: 35px; letter-spacing: 1px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            Kami Siap Membantu dan Melayani Anda.
          </h3>
          <div class="mb-3 kontak"
            style="font-family: sans-serif; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-top: 10px;">
            <h6
              style="font-family: sans-serif; font-weight: bold; color: #fff; margin-bottom: 5px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
              Kontak:</h6>
            <div class="mb-3 d-flex align-items-center">
              <i class="fas fa-map text-white me-2"></i>
              <a href="https://www.google.com/maps/place/Ar-Rasyid+Palembang+Islamic+Hospital/@-2.9361687,104.7218342,15z/data=!4m2!3m1!1s0x0:0x297bd3dca5d8c585?sa=X&ved=1t:2428&ictx=111"
                target="blank">
                Jl. HM. Saleh No.2 KM.7, Sukarami, Kec. Sukarami, Kota Palembang, Sumatera Selatan 30961
              </a>
            </div>
            <div class="mb-3 d-flex align-items-center">
              <i class="fas fa-phone text-white me-2"></i>
              <a href="tel:026742090988">(0711) 5610503</a>
            </div>
            <div class="mb-2 d-flex align-items-center">
              <i class="fas fa-envelope text-white me-2"></i>
              <a href="mailto:rsikarawang7@gmail.com" target="blank">rs.ar.plm@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="card-contact w-100">
            <form action="#" method="POST">
              <input type="hidden" name="_token" value="P9Lelp2NDAN3abIBtTa7UEZR3H6BLQ0KINxUBzZX">
              <h2 class="title-h2" style="font-family: sans-serif; font-weight: bold; color: black;  color: green">Ada
                pertanyaan/masukan..?</h2>
              <div class="form-floating mb-2">
                <input type="text" class="form-control" id="telp" name="telp" placeholder="08961...">
                <label for="floatingInput">Masukan No Telp/WA</label>
              </div>
              <div class="form-floating mb-2">
                <input type="text" class="form-control" id="isi" name="isi" placeholder="Bagaimana...">
                <label for="floatingInput">Pertanyaan/Masukan Anda</label>
              </div>
              <button type="submit" class="button-kontak">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- saran akhir-->

  <!-- yt awal-->
  <div class="container">
    <div class="video-title">Video - RSI Ar-Rasyid</div>
    <div class="row">
      <div class="col-md-6 video-container">
        <iframe src="https://www.youtube.com/embed/pEmVGdFKNdo" allowfullscreen></iframe>
        <div class="video-subtitle text-center">PROFIL RS ISLAM AR RASYID PALEMBANG </div>
      </div>
      <div class="col-md-6 video-container">
        <iframe src="https://www.youtube.com/embed/GVzBmjxJWng" allowfullscreen></iframe>
        <div class="video-subtitle text-center">CODE BLUE - RS ISLAM ARRASYID</div>
      </div>
    </div>
  </div>
  <!-- yt akhir-->


  <!-- maps awal-->
  <section id="contactt" class="contactt">
    <div class="containerr">
      <div class="location-label">Lokasi</div>
      <div class="map-container">
        <iframe
          src="https://maps.google.com/maps?q=Ar-Rasyid%20Palembang%20Islamic%20Hospital&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
          frameborder="0" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
  <!-- maps akhir-->

  <!-- footer awal-->
  <footer style="position: relative; z-index: 0; background-color: green; color: #ffffff; margin-top: -15px;">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-3 footer-about wow fadeInUp animated"
            style="visibility: visible; animation-name: fadeInUp;">
            <img class="logo-footer" src="{{asset('img/logo.png')}}" alt="logo-footer" data-at2x="assets/img/logo.png"
              width="70" height="70">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, iure! Lorem ipsum dolor sit, amet
              consectetur adipisicing elit. Impedit, aliquam.
            </p>
            <p><a href="#" style="color: #ffffff;">Our Team</a></p>
          </div>
          <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown animated"
            style="visibility: visible; animation-name: fadeInDown;">
            <h3>Kontak</h3>
            <p><i class="fas fa-map-marker-alt"></i> &nbsp;JL. HM. Saleh No.2 KM.7, Sukarami, Kec. Sukarami,
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kota Palembang
            </p>
            <p><i class="fas fa-phone"></i> &nbsp;Phone: (0711) 5610503</p>
            <p><i class="fas fa-envelope"></i> &nbsp;Email: <a href="mailto:hello@domain.com"
                style="color: #ffffff; text-decoration: none;">rs.ar.plm@gmail.com</a></p>
          </div>
          <div class="col-md-4 col-lg-4 footer-links wow fadeInUp animated"
            style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
              <div class="col">
                <h3>Informasi</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p><a class="scroll-link" href="#" style="color: #ffffff; text-decoration: none;">Tentang Kami</a></p>
                <p><a class="scroll-link" href="#" style="color: #ffffff; text-decoration: none;">Layanan</a></p>
                <p><a class="scroll-link" href="#" style="color: #ffffff; text-decoration: none;">Dokter</a></p>
                <p><a class="scroll-link" href="#" style="color: #ffffff; text-decoration: none;">Berita</a></p>
              </div>
              <div class="col-md-6">
                <p><a class="scroll-link" href="#" style="color: #ffffff; text-decoration: none;">Hubungi Kami</a></p>
                <p><a class="scroll-link" href="#" style="color: #ffffff; text-decoration: none;">Karir</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" style="background-color: white; color: black; text-align: center;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            Hak Cipta &copy; 2024
            <a href="https://www.linkedin.com/in/heriyyanto" style="color: #000000; text-decoration: none;"
              target="_blank" class="heriyanto-link">Heriyanto</a>
            <a href="https://www.instagram.com/universitasmdp/" style="color: #000000; text-decoration: none;"
              target="_blank" class="mdp-link">MDP Student.</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer akhir-->
  <div id="cursor"></div>

  <div class="whatsapp-button">
    <a href="https://api.whatsapp.com/send/?phone=6289677231836&text=Halo%20Rumah%20Sakit%20Islam%20Ar-Rasyid%20Palembang,%20saya%20ingin%20menanyakan%20tentang%20pelayanan%20kesehatan&type=phone_number&app_absent=0"
      target="_blank" class="whatsapp-link">
      <span class="whatsapp-text">Ada Ditanyakan..?</span>
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>

</body>

<!--js-->
<script src="{{ asset('js/script.js')}}"></script>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/layanan.js') }}"></script>
<script src="{{ asset('js/scroll.js') }}"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>