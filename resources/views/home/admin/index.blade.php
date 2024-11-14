<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('plugin/fontawesome/css/all.min.css')}}" rel="stylesheet" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="position-sticky">
                    <a href="{{route('dashboard')}}" class="home-link active"><i class="bi bi-house-fill"></i> Home</a>
                    <a href="{{route('berita')}}" class="berita-link"><i class="bi bi-person-fill"></i> Berita</a>
                    <a href="{{route('dokter')}}" class="dokter-link"><i class="bi bi-people-fill"></i> Dokter</a>
                    <a href="{{route('pesan')}}" class="saran-link"><i class="bi bi-people-fill"></i> Pesan</a>
                    <a href="{{route('layanan')}}" class="kontak-link"><i class="bi bi-person-badge-fill"></i> Layanan</a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="header">
                    <h2>Dashboard</h2>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn logout-btn">LOGOUT</button>
                    </form>
                    <h2>Selamat Datang di Menu Admin<br> Rumah Sakit Islam Ar-Rasyid Palembang</h2>
                </div>
                @yield('content')
                
            </main>
            
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <!-- Include JS libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>








    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>

</body>

</html>