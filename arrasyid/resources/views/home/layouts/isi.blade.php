  <!-- selamat datang awal-->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('img/dokter1.png') }}" alt="Certificate" class="img-fluid custom-img" loading="lazy">
        </div>
        <div class="col-md-7 text-content">
          <h2>Selamat datang di<br>RSI Ar-Rasyid Palembang</h2>
          <p style="text-align: justify;">Komitmen kami adalah memberikan perawatan kesehatan terbaik, kami mengutamakan kesehatan Anda dengan layanan Islami yang penuh kasih dan profesional.
            Temukan berbagai layanan kesehatan yang sesuai dengan kebutuhan Anda di RSI Ar-Rasyid Palembang</p>
          <div class="button-group">
            <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile" class="btn btn-custom" target="_blank"
              rel="noopener noreferrer">
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
        <p>kami memberikan pelayanan medis yang untuk memenuhi kesehatan Anda</p>
      </div>
      <div class="row gy-4 atashemo">
        <div class="col-lg-3 okelayanan">
          <ul class="nav nav-layanan flex-column" id="myTab" role="tablist" style="margin-left: 100px;">
            <li class="nav-item" role="presentation">
              <a class="nav-linkk active" id="hemodialisa-tab" data-bs-toggle="tab" href="#hemodialisa" role="tab"
                aria-controls="hemodialisa" aria-selected="true">
                <span class="bullet-point"></span> IGD
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
                <span class="bullet-point"></span> Rawat Jalan
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="treadmill-tab" data-bs-toggle="tab" href="#treadmill" role="tab"
                aria-controls="treadmill" aria-selected="false">
                <span class="bullet-point"></span> Rawat Inap
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="panoramic-tab" data-bs-toggle="tab" href="#panoramic" role="tab"
                aria-controls="panoramic" aria-selected="false">
                <span class="bullet-point"></span> Penunjang Medis
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-linkk" id="t3t4-tab" data-bs-toggle="tab" href="#t3t4" role="tab" aria-controls="t3t4"
                aria-selected="false">
                <span class="bullet-point"></span> Farmasi
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-liked {{ Request::is('layananrs') ? 'active' : ''}}" id="layanan" href="layananrs">
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
                  <h3>IGD</h3>
                  <p>Layanan IGD kami siap memberikan penanganan medis darurat selama 24 jam, setiap hari, untuk berbagai kondisi
                    kritis dan kebutuhan mendesak. Dengan tim medis yang terlatih khusus dan peralatan medis canggih, kami menangani
                    kasus-kasus gawat darurat dengan cepat dan tepat. Prioritas kami adalah keselamatan dan stabilisasi kondisi pasien dalam situasi darurat.
                    Kami berkomitmen untuk memberikan penanganan yang responsif, profesional, dan penuh empati bagi setiap pasien yang datang ke IGD.</p>
                  <a href="layananrs" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/igd.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="ctscan" role="tabpanel" aria-labelledby="ctscan-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>MCU</h3>
                  <p>Rumah sakit kami menyediakan layanan medical check-up lengkap yang dirancang untuk memantau kesehatan Anda secara menyeluruh.
                    Dengan teknologi terkini dan tenaga medis profesional, kami memastikan bahwa Anda menerima penilaian kesehatan yang akurat dan
                    komprehensif. Medical check-up rutin sangat penting untuk mendeteksi dini berbagai kondisikesehatan dan menjaga
                    kesejahteraan Anda secara optimal. Percayakan kesehatan Anda kepada kami untuk mendapatkan hasil yang terbaik.</p>
                  <a href="layananrs" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="layananrs" class="gallery-lightbox">
                    <img src="{{ asset('img/mcu.jpeg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="endoskopi" role="tabpanel" aria-labelledby="endoskopi-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Rawat Jalan</h3>
                  <p>Layanan rawat jalan kami menyediakan berbagai fasilitas medis untuk konsultasi, diagnosis, dan
                    perawatan tanpa perlu menginap di rumah sakit. Dengan dukungan dokter spesialis dan tenaga medis
                    berpengalaman, kami menawarkan layanan yang cepat, efisien, dan terfokus pada kebutuhan pasien.
                    Rawat jalan kami mencakup berbagai poliklinik dengan jadwal fleksibel, sehingga memudahkan Anda
                    untuk mendapatkan perawatan yang diperlukan. Kami berkomitmen untuk memberikan layanan yang nyaman
                    dan berkualitas tinggi guna mendukung kesehatan Anda.</p>
                  <a href="layananrs" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="#" class="gallery-lightbox">
                    <img src="{{ asset('img/raatjalan.jpg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="treadmill" role="tabpanel" aria-labelledby="treadmill-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Rawat Inap</h3>
                  <p>Layanan rawat inap kami  memberikan kenyamanan dan perawatan terbaik bagi pasien selama proses penyembuhan. 
                    Dengan fasilitas kamar yang nyaman dan tim medis yang siap sedia 24 jam, kami memastikan setiap pasien 
                    mendapatkan perhatian dan perawatan yang menyeluruh. Layanan rawat inap kami mencakup pemantauan 
                    kesehatan yang intensif, dukungan medis yang berkualitas, serta pelayanan yang ramah dan profesional.
                     Kami berkomitmen untuk mendukung kesembuhan Anda dengan lingkungan yang aman dan tenang.</p>
                  <a href="layananrs" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="layananrs" class="gallery-lightbox">
                    <img src="{{ asset('img/raatinap.jpeg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="panoramic" role="tabpanel" aria-labelledby="panoramic-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Penujang Medis</h3>
                  <p>Kami menyediakan berbagai layanan penunjang medis yang lengkap untuk mendukung diagnosis 
                    dan perawatan pasien secara akurat dan efisien. Dengan peralatan canggih dan tenaga ahli di bidang radiologi, 
                    laboratorium, dan diagnostik, kami berkomitmen memberikan hasil yang cepat dan terpercaya. 
                    Layanan penunjang medis kami meliputi pemeriksaan laboratorium, radiologi, ultrasonografi, 
                    dan berbagai tes diagnostik lainnya. Keakuratan dan kecepatan layanan kami membantu dokter
                     dalam menentukan langkah pengobatan terbaik untuk Anda.</p>
                  <a href="layananrs" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-lg-4 text-center">
                  <a href="layananrs" class="gallery-lightbox">
                    <img src="{{ asset('img/penunjangmedis1.jpeg') }}" alt="" class="img-fluidd">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="t3t4" role="tabpanel" aria-labelledby="t3t4-tab">
              <div class="row gy-4">
                <div class="col-lg-8 details">
                  <h3>Farmasi</h3>
                  <p>Kami menyediakan layanan farmasi yang lengkap dan terpercaya, dengan berbagai pilihan obat yang tersedia
                     untuk memenuhi kebutuhan Anda. Didukung oleh tenaga apoteker yang berpengalaman, kami siap memberikan konsultasi
                      dan memastikan Anda mendapatkan obat yang tepat sesuai resep dan kondisi kesehatan Anda. Komitmen kami adalah 
                      memberikan pelayanan yang cepat, aman, dan efisien untuk mendukung proses penyembuhan Anda. Percayakan 
                      kebutuhan obat Anda kepada layanan farmasi kami.</p>
                  <a href="layananrs" class="fst-italic" style="color: royalblue;">Lihat Selengkapnya
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
                    <img src="{{ asset('img/farmasi.jpg') }}" alt="" class="img-fluidd">
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

  <!-- blog awal-->
  <section id="berita" class="bg-body">
    <div class="container py-2">
      <div class="header-berita text-center">
        <h2 class="fw-bold mb-3">Berita & Informasi</h2>
        <div class="border-bottom " style="margin-bottom: 40px; border-bottom-width: 1px; border-bottom-color: black;">
        </div>
      </div>

      <div class="row py-3">
        @foreach ($artikels as $item)
        <div class="col-lg-4">
          <div class="card border-0 card-artikel">
            <img src="{{ asset("/storage/artikel/{$item->image}") }}" class="img-fluid mb-2 rounded-image" alt="">
            <div class="konten-berita">
              <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
              <h4 class="fw-bold mb-3">{{ $item->judul}}</h4>
              <p class="text-secondary">#rsiarrasyid</p>
              <a href="/detail/{{$item->slug}}"
                class="text-dexoration-none text-danger">Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="footer-berita text-center" style="text-transform: uppercase;">
        <a href="/blog" class="btn btn-outline-danger  {{ Request::is('blog') ? 'active' : ''}}">Berita
          Lainnya...</a>
      </div>
    </div>
    </div>
  </section>
  <!-- berita akhir-->

  <!-- cari dokter-->
  <div class="container-fluid h-100 bg-dark py-6">
    <div class="container">
      <div class="row align-items-center text-center text-md-start">
        <div class="col-md-6 mb-4 mb-md-0" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" data-aos="fade-up" data-aos-duration="800">
          <h5 class="text-white mb-3 text-center" style="font-family: 'Merriweather', serif; font-size: 1.5rem; font-weight: 400; text-transform: uppercase; letter-spacing: 0.1em;">
            Lihat Jadwal Dokter
          </h5>
          <h3 class="text-white font-weight-bold mt-4 text-center text-uppercase" style="letter-spacing: 5px; font-family:cambaria; font-size: 2rem; font-weight: bold;  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" data-aos="fade-up" data-aos-duration="1200">
            Siap Membantu Melayani Kesehatan Anda
          </h3>
        </div>

        <div class="col-lg-6 col-md-4" data-aos="fade-up" data-aos-duration="800">
          <div class="card-contact w-80">
            <form action="{{ url('cari-dokter') }}" method="GET" id="waForm">
              <h2 class="title-h2" style="font-family: sans-serif; font-weight: bold; color: green">
                <i class="fa-solid fa-magnifying-glass"></i> Cari Dokter
              </h2>
              <div class="form-floating mb-4">
                <select name="spesialis" class="form-control">
                  <option value="">Pilih Spesialis</option>
                  <option value="THT" {{ request()->input('spesialis') == 'THT' ? 'selected' : '' }}>THT</option>
                  <option value="Penyakit Dalam" {{ request()->input('spesialis') == 'Penyakit Dalam' ? 'selected' : '' }}>Penyakit Dalam</option>
                  <option value="Saraf" {{ request()->input('spesialis') == 'Saraf' ? 'selected' : '' }}>Saraf</option>
                  <option value="Bedah" {{ request()->input('spesialis') == 'Bedah' ? 'selected' : '' }}>Bedah</option>
                  <option value="OBGYN" {{ request()->input('spesialis') == 'OBGYN' ? 'selected' : '' }}>OBGYN</option>
                  <option value="Anak" {{ request()->input('spesialis') == 'Anak' ? 'selected' : '' }}>Anak</option>
                  <option value="Gigi" {{ request()->input('spesialis') == 'Gigi' ? 'selected' : '' }}>Gigi</option>
                  <option value="Jantung" {{ request()->input('spesialis') == 'Jantung' ? 'selected' : '' }}>Jantung</option>
                  <option value="Mata" {{ request()->input('spesialis') == 'Mata' ? 'selected' : '' }}>Mata</option>
                  <option value="Ginjal" {{ request()->input('spesialis') == 'Ginjal' ? 'selected' : '' }}>Ginjal</option>
                  <option value="Orthopedi" {{ request()->input('spesialis') == 'Orthopedi' ? 'selected' : '' }}>Orthopedi</option>
                  <option value="Bedah Mulut" {{ request()->input('spesialis') == 'Bedah Mulut' ? 'selected' : '' }}>Bedah Mulut</option>
                  <option value="Kesehatan Jiwa" {{ request()->input('spesialis') == 'Kesehatan Jiwa' ? 'selected' : '' }}>Kesehatan Jiwa</option>
                  <option value="Kulit & Kelamin" {{ request()->input('spesialis') == 'Kulit & Kelamin' ? 'selected' : '' }}>Kulit & Kelamin</option>
                  <option value="Rehabilitas Medik" {{ request()->input('spesialis') == 'Rehabilitas Medik' ? 'selected' : '' }}>Rehabilitas Medik</option>
                  <option value="Urologi" {{ request()->input('spesialis') == 'Urologi' ? 'selected' : '' }}>Urologi</option>
                </select>
                <label for="spesialis">Spesialis</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ request()->input('nama') }}">
                <label for="nama">Nama Dokter</label>
              </div>
              <div class="form-group d-flex justify-content-center mt-5">
                <button type="submit" id="sendWa" class="btn btn-success">Cari</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </div>
  </div>
  <!-- cari dokter akhir-->

  <!-- yt awal-->
  <div class="container mb-4" >
    <div class="video-title" data-aos="fade-up" data-aos-duration="800">Video - RSI Ar-Rasyid</div>
    <div class="border-bottom" style="margin-bottom: 40px; border-bottom-width: 1px; border-bottom-color: black;"></div>
    <div class="row" >
      <div class="col-md-6 video-container" data-aos="fade-right" data-aos-duration="800">
        <iframe src="https://www.youtube.com/embed/pEmVGdFKNdo" allowfullscreen></iframe>
        <div class="video-subtitle text-center">PROFIL RS ISLAM AR RASYID PALEMBANG </div>
      </div>
      <div class="col-md-6 video-container" data-aos="fade-left" data-aos-duration="800">
        <iframe src="https://www.youtube.com/embed/GVzBmjxJWng" allowfullscreen></iframe>
        <div class="video-subtitle text-center">CODE BLUE - RS ISLAM ARRASYID</div>
      </div>
    </div>
  </div>

  <!-- yt akhir-->

  <!-- Kemitraan Section Start -->
  <div class="partnership-section mb-3" id="mitra">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h1 class="title-section">Kemitraan</h1>
          <p class="text-muted">Kami berkolaborasi dengan mitra-mitra terpercaya</p>
        </div>
      </div>
      <div id="partnershipCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/bpjs.png') }}" alt="Logo 1" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/2a.png') }}" alt="Logo 2" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/3.png') }}" alt="Logo 3" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/4.png') }}" alt="Logo 4" class="img-fluid partnership-logo">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/5a.png') }}" alt="Logo 5" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/6a.png') }}" alt="Logo 6" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/7.png') }}" alt="Logo 7" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/8.png') }}" alt="Logo 8" class="img-fluid partnership-logo">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/9.png') }}" alt="Logo 9" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/10.png') }}" alt="Logo 10" class="img-fluid partnership-logo">
              </div>

              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/11.png') }}" alt="Logo 9" class="img-fluid partnership-logo">
              </div>
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/12.png') }}" alt="Logo 10" class="img-fluid partnership-logo">
              </div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                <img src="{{ asset('img/mitra/13.png') }}" alt="Logo 9" class="img-fluid partnership-logo">
              </div>
              <!-- <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/mitra/10.png') }}" alt="Logo 10" class="img-fluid partnership-logo">
                        </div>

                        <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/mitra/11.png') }}" alt="Logo 9" class="img-fluid partnership-logo">
                        </div>
                        <div class="col-md-2 col-sm-4 d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/mitra/12.png') }}" alt="Logo 10" class="img-fluid partnership-logo">
                        </div> -->
            </div>

          </div>
        </div>

        <!-- Tombol navigasi tanpa panah -->
        <a class="carousel-control-prev custom-carousel-control" href="#partnershipCarousel" role="button" data-bs-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next custom-carousel-control" href="#partnershipCarousel" role="button" data-bs-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>



  <!-- Kemitraan Section End -->