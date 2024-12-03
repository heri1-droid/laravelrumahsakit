<link href="{{ asset('css/layanan.css')}}" rel="stylesheet" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->


<!-- Content of page -->

<!-- Page Header awal -->
<section class="intro-section img-download-section" id="dokter_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center header-section header-section-light">
                <h1 class="mb-0 text-light">Layanan</h1>
                <small class="text-light">Layanan RSI Ar-Rasyid Palembang</small>
            </div>
        </div>
    </div>
</section>
<!-- Page Header End -->


<div style="background: radial-gradient(circle, #ffffff, #fffdf9); background-repeat:no-repeat; background-size:cover; background-position: center top; padding: 40px 0;">

<section class="layanan-main">
        <div class="container" data-aos="fade-up" data-aos-duration="900">

            <div class="row">
                @foreach ($layanans as $item)


                <div class="col-md-2 mb-3">
                    <div class="card p-2 py-3 text-center card-layanan-page">
                        <div class="img mb-2 pt-2"><a href="#exampleModal"><img src="{{ asset('storage/layanan/' . $item->image) }}" width="50" class="">
                            </a></div>
                        <h6 class="mb-0">{{$item->layanan}}</h6>
                        <small class="text-success pt-2">Layanan {{$item->layanan}}</small>
                        <div class="mt-4 apointment-layanan"> <a href="/penawaran/{{$item->slug}}" class="btn btn-success text" ><small>&nbsp;<i
                                        class="fas fa-search"></i> Lihat
                                    Layanan</small></a> </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    <script src="{{ asset('js/layanan.js')}}"></script>
</section>
</div>
