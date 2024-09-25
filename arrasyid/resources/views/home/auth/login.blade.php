<link href="{{ asset('css/berita.css')}}" rel="stylesheet" />

<!-- Page Header awal -->
<section class="intro-section img-download-section" id="dokter_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center header-section header-section-light">
                <h1 class="mb-0 text-light">Halaman Login Admin</h1>
                <small class="text-light">RSI Ar-Rasyid Palembang</small>
            </div>
        </div>
    </div>
</section>
<!-- Page Header End -->

<section style="margin-top: 20px;">
    <div class="container py-5 col-xxl-6">

        <form action="/login" method="POST">
            @csrf
            <div class="form-groub mb-4">
                <label for="">Masukan Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="formgroub mb-4">
                <label for="">Masukan password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary text-center">Submit</button>
        </form>
    </div>
</section>