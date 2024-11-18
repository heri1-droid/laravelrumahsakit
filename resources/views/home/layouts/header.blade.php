<body>
<nav class="navbar navbar-expand-lg navbar-body-secondary bg-body-secondary" id="navbarTop">
    <div class="container-fluid">
        <ul class="navbar-nav ms-auto custom-margin">

            <!-- Email -->
            <li class="nav-item d-flex align-items-center d-none d-lg-flex">
                <a class="nav-link icon-link text-white" href="mailto:rs.ar.plm@gmail.com">
                    <i class="fas fa-envelope"></i>  
                </a>
                <a class="nav-link text-white">Email<br>rs.ar.plm@gmail.com</a>
            </li>
            <!-- Telepon -->
            <li class="nav-item d-flex align-items-center d-none d-lg-flex">
                <a class="nav-link icon-link text-white" href="tel:07115610503"> 
                    <i class="fas fa-phone"></i>
                </a>
                <a class="nav-link text-white">Telpon/fax<br>(0711) 5610503</a>
            </li>
            <!-- Media Sosial -->
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link icon-link text-white" target="_blank" href="https://www.instagram.com/rs_islam_arrasyid/">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link icon-link text-white" target="_blank" href="https://www.youtube.com/@rs.ar-rasyidpalembang/videos">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            
        </ul>
    </div>
</nav>


<!-- Navigasi Utama -->
<nav class="navbar navbar-expand-lg shadow-lg navbar-body-tertiary navbar-header fixed-top" style="background-color: #ffffff;" id="navbarMain">
    <div class="container">
        <!-- Tombol Toggle (untuk mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-atas">
                    <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" aria-current="home" href="/">Home</a>
                </li>
                <li class="nav-atas">
                    <a class="nav-link {{ Request::is('profil') ? 'active' : ''}}" href="/profil">Profil</a>
                </li>
                <li class="nav-atas">
                    <a class="nav-link {{ Request::is('layananrs') ? 'active' : ''}}" href="/layananrs">Layanan</a>
                </li>
                <!-- Logo -->
                <li class="nav-atas logo-item d-none d-lg-block">
                    <a class="nav-gas">
                        <img src="{{ asset('img/logofix.png')}}" alt="Logo" class="navbar-logo">
                    </a>
                </li>
                <li class="nav-atas">
                    <a class="nav-link {{ Request::is('dokterrs') ? 'active' : ''}}" href="/dokterrs">Dokter</a>
                </li>
                <li class="nav-atas">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : ''}}" href="/blog">Berita</a>
                </li>
                <li class="nav-atas">
                    <a class="nav-link {{ Request::is('kontak') ? 'active' : ''}}" href="/kontak">Ulasan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
