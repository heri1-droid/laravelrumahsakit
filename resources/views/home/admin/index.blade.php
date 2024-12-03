<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Summernote -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"> --}}

    <!-- Font Awesome -->
    <link href="{{ asset('plugin/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar bg-light">
                <div class="position-sticky pt-3">
                    <a href="{{ route('dashboard') }}" class="nav-link active"><i class="bi bi-house-fill"></i> Home</a>
                    <a href="{{ route('berita') }}" class="nav-link"><i class="bi bi-person-fill"></i> Berita</a>
                    <a href="{{ route('dokter') }}" class="nav-link"><i class="bi bi-people-fill"></i> Dokter</a>
                    <a href="{{ route('pesan') }}" class="nav-link"><i class="bi bi-people-fill"></i> Pesan</a>
                    <a href="{{ route('layanan') }}" class="nav-link"><i class="bi bi-person-badge-fill"></i>
                        Layanan</a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between align-items-center my-4">
                    <h2>Dashboard</h2>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">LOGOUT</button>
                    </form>
                </div>
                <h3>Selamat Datang di Menu Admin<br> Rumah Sakit Islam Ar-Rasyid Palembang</h3>
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    {{-- <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                fontNames: ['Arial', 'Courier New', 'Verdana', 'Tahoma'],
                fontSizes: ['8', '10', '12', '14', '16', '18', '20', '22', '24', '28', '36', '48', '64',
                    '82', '150'
                ]
            });
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200 // Atur tinggi editor menjadi 300px
            });
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Berhasil",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif

</body>

</html>
