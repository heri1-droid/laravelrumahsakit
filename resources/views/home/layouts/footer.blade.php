<!-- footer awal-->
<footer style="position: relative; z-index: 0; background: radial-gradient(circle, #149c36, #0d7b26);
 color: #ffffff;">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-3 footer-about wow fadeInUp animated"
          style="visibility: visible; animation-name: fadeInUp;">
          <img class="logo-footer" src="{{asset('img/logobawah5.png')}}" alt="logo-footer"
            data-at2x="assets/img/logo.png" width="280" height="100">
          <p style="text-align: left; color: white; margin-top: -15px"><br><b>RSI Ar-Rasyid Palembang</b> menyediakan fasilitas yang
            mendukung pelayanan kesehatan Anda, dengan
            mengedepankan nilai-nilai Islami.
          </p>
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
              <p><a class="scroll-link {{ Request::is('profil') ? 'active' : ''}}" href="/profil" style="color: #ffffff; text-decoration: none;">Tentang Kami</a></p>
              <p><a class="scroll-link {{ Request::is('layananrs') ? 'active' : ''}}" href="/layananrs" style="color: #ffffff; text-decoration: none;">Layanan</a></p>
              <p><a class="scroll-link {{ Request::is('dokterrs') ? 'active' : ''}}" href="/dokterrs" style="color: #ffffff; text-decoration: none;">Dokter</a></p>
              <p><a class="scroll-link {{ Request::is('blog') ? 'active' : ''}}" href="/blog" style="color: #ffffff; text-decoration: none;">Berita</a></p>
            </div>
            <div class="col-md-6">
              <p><a class="scroll-link" href="https://api.whatsapp.com/send/?phone=6281341684986&text=Halo%20RSI%20Ar-Rasyid%20Palembang&type=phone_number&app_absent=0" style="color: #ffffff; text-decoration: none;">Hubungi Kami</a></p>
              <p><a class="scroll-link" href="kontak" style="color: #ffffff; text-decoration: none;">Kotak Saran</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-body" style="color: black; text-align: center;">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          Copyright &copy; 2024
          <!-- UU hak cipta No 19 tahun 2002 pasal 2 Tentang Hak Cipta -->
          <!-- UU hak cipta No 19 tahun 2002 pasal 2 Tentang Hak Cipta -->
          <!-- UU hak cipta No 19 tahun 2002 pasal 2 Tentang Hak Cipta -->
          <!-- UU hak cipta No 19 tahun 2002 pasal 2 Tentang Hak Cipta -->
          <a href="https://www.linkedin.com/in/heriyyanto" style="color: #000000; text-decoration: none;"
            target="_blank" class="heriyanto-link">Heriyanto</a>
            <a href="https://www.instagram.com/universitasmdp/" style="color: #000000; text-decoration: none;"
            target="_blank" class="mdp-link">MDP University.</a>
                  <!-- WEBSITE TERPANTAU-->
          <!--JANGAN DIUBAH HAK CIPTA Universitas-->
          <!--JANGAN DIUBAH HAK CIPTA Universitas-->
          <!--JANGAN DIUBAH HAK CIPTA Universitas-->
          <!--JANGAN DIUBAH HAK CIPTA Universitas-->
          <!-- MUTLAK TIDAK BOLEH DIGANGU GUGAT -->
                      <!-- ISI PASAL -->
          <!-- Suatu Ciptaan tidak boleh diubah walaupun
            Hak Ciptanya telah diserahkan kepada pihak lain,
            kecuali dengan persetujuan Pencipta atau dengan 
            persetujuan ahli warisnya dalam hal Pencipta telah meninggal dunia. -->
         
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer akhir-->

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
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
<script src="{{ asset('js/wa.js') }}"></script>


<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>