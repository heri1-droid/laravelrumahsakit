<link href="{{ asset('css/layanan.css')}}" rel="stylesheet" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


<!-- Content of page -->

<!-- Page Header awal -->
<section class="intro-section img-download-section" id="dokter_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center header-section header-section-light">
                <h1 class="mb-0 text-light">Ulasan</h1>
                <small class="text-light">Kami menerima dan menghargai setiap pendapat Anda</small>
            </div>
        </div>
    </div>
</section>
<!-- Page Header End -->



<div class="page-section" style="background: radial-gradient(circle, #ffffff, #fffdf9); margin-top: -20px;">
@if (session()->has('success'))
        <div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi </strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dissmiss="alert" arial-label="Close"></button>
        </div>
        @endif
    <div class="container contact-form mt-5 col-xxl-6 mb-5">
        

        <form action="/kontak" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6 py-2 rating-wrapper">
                    <label for="rating">Rating&nbsp;<span class="required">*</span></label>
                    <div class="rating">
                        <input type="radio" name="rate" id="star5" value="5"><label for="star5" title="5 stars"><i
                                class="fa fa-star"></i></label>
                        <input type="radio" name="rate" id="star4" value="4"><label for="star4" title="4 stars"><i
                                class="fa fa-star"></i></label>
                        <input type="radio" name="rate" id="star3" value="3"><label for="star3" title="3 stars"><i
                                class="fa fa-star"></i></label>
                        <input type="radio" name="rate" id="star2" value="2"><label for="star2" title="2 stars"><i
                                class="fa fa-star"></i></label>
                        <input type="radio" name="rate" id="star1" value="1"><label for="star1" title="1 star"><i
                                class="fa fa-star"></i></label>
                    </div>
                    <span id="rate" name="rate">{{ old('rate') }}</span>
                    <div id="rating-text"></div>
                </div>
                <div class="col-12 py-2 ">
                    <label for="message">Penilaianmu *</label>
                    <textarea id="message" class="form-control" rows="8" name="ulasan"
                        placeholder="Ulasan Anda *" pattern="[A-Za-z ]+"
                        title="Hanya huruf dan spasi yang diperbolehkan">{{ old('alamat') }}</textarea>
                </div>
                <div class="col-12 py-2">
                    <label for="subject">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" id="subject" class="form-control"
                        placeholder="Masukan nama *" pattern="[A-Za-z ]+"
                        title="Hanya huruf dan spasi yang diperbolehkan">

                </div>
                <div class="col-12 py-2">
                    <label for="subject">WhatsApp</label>
                    <input type="number" name="no" value="{{ old('no') }}" id="subject" class="form-control"
                        placeholder="Nomor WhatsApp *">
                    <p style="font-size: 12px;">Tenang nomor telpon Anda tidak akan dipublikasikan.</p>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
    @include('home.layouts.lokasi')

</div>


<style>
    .contact-form {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    }

    #rate {
        color: white;
        background-color: black;
        padding: 5px 15px;
        border-radius: 5px;
        font-weight: bold;
    }

    .contact-form label {
        font-weight: bold;
        color: #343a40;
    }

    .contact-form .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 10px;
        font-size: 1em;
        transition: all 0.3s ease;
    }

    .contact-form .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .contact-form .rating-wrapper {
        margin-bottom: 15px;
    }

    .contact-form .rating {
        display: flex;
        direction: rtl;
        font-size: 2em;
        cursor: pointer;
    }

    .contact-form .rating label {
        color: #ddd;
        margin: 0 5px;
        transition: color 0.3s ease;
    }

    .contact-form .rating input:checked~label,
    .contact-form .rating input:checked~label~label {
        color: #ffc107;
    }

    .contact-form .rating input:hover~label,
    .contact-form .rating input:hover~label~label,
    .contact-form .rating label:hover,
    .contact-form .rating label:hover~label {
        color: #ffc107;
    }

    .contact-form .rate-value {
        margin-top: 10px;
        font-size: 1.2em;
        color: #343a40;
    }

    .contact-form button {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        font-size: 1.2em;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-form button:hover {
        background-color: #0069d9;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }
</style>

<style>
    .rating-wrapper {
        display: inline-block;
    }

    .rating {
        display: flex;
        direction: rtl;
        /* Set the direction from right to left */
        font-size: 2em;
        cursor: pointer;
    }

    .rating input {
        display: none;
    }

    .rating label {
        color: #ddd;
        margin: 0 5px;
        text-align: center;
    }

    /* Make the stars yellow from right to left */
    .rating input:checked~label,
    .rating input:checked~label~label {
        color: #ffc107;
    }

    /* Apply the hover effect from right to left */
    .rating input:hover~label,
    .rating input:hover~label~label,
    .rating label:hover,
    .rating label:hover~label {
        color: #ffc107;
    }

    .rate-value {
        margin-top: 10px;
        font-size: 1.2em;
    }
</style>

<script>
    // Ambil semua input radio untuk rating
    const ratingInputs = document.querySelectorAll('.rating input');
    const rateDisplay = document.getElementById('rate');

    // Tambahkan event listener ke setiap input radio
    ratingInputs.forEach(input => {
        input.addEventListener('change', function() {
            // Ketika input dipilih, tampilkan nilainya di elemen rateDisplay
            rateDisplay.textContent = this.value;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const ratingTexts = {
        1: "Tidak Memuaskan",
        2: "Kurang Memuaskan",
        3: "Memadai",
        4: "Sangat Memuaskan",
        5: "Luar Biasa"
    };

    // Ambil semua radio button berdasarkan nama 'rate'
    const ratingInputs = document.querySelectorAll('input[name="rate"]');

    // Ketika radio button dipilih
    ratingInputs.forEach(function(input) {
        input.addEventListener('change', function() {
            const ratingValue = this.value; // Ambil nilai yang dipilih (1-5)
            const ratingText = ratingTexts[ratingValue]; // Ambil teks sesuai nilai

            // Tampilkan teks penilaian di bawah bintang
            document.getElementById('rating-text').textContent = ratingText;
        });
    });
});

</script>