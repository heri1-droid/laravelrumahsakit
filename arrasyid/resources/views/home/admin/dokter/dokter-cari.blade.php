@extends('home.admin.index')

@section('content')
<section style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container col-xxl-14">
        <h3 class="fw-bold mb-2">Halaman Dokter</h3>
        <a href="{{ route('dokter.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Tambah Dokter
        </a>
        <hr>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-4">
                    <form action="{{ url('dokter-cari') }}" method="GET">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="text" name="cari" class="form-control" placeholder="Cari Dokter...">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if (session()->has('success'))
        <div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi </strong>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="small-column" style="width: 5%;">#</th>
                        <th class="small-column" style="width: 20%;">Nama</th>
                        <th class="small-column" style="width: 10%;">Foto</th>
                        <th class="small-column" style="width: 10%;">Spesialis</th>
                        <th class="small-column" style="width: 8%;">Hari</th>
                        <th class="small-column" style="width: 8%;">Mulai</th>
                        <th class="small-column" style="width: 8%;">Selesai</th>
                        <th class="small-column" style="width: 11%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = $doctors->firstItem(); // Nomor urut awal untuk halaman saat ini
                    @endphp
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $no++ }}</td> <!-- Increment nomor urut -->
                        <td>{{ $doctor->nama }}</td>
                        <td>
                            <img src="{{ asset("/storage/doctor/{$doctor->foto}") }}" height="100" width="100">
                        </td>
                        <td>{{ $doctor->spesialis }}</td>

                        @if($doctor->schedules->isNotEmpty())
                        <td>
                            @foreach($doctor->schedules as $schedule)
                            {{ $schedule->day }}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($doctor->schedules as $schedule)
                            {{ $schedule->start_time }}<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($doctor->schedules as $schedule)
                            {{ $schedule->end_time }}<br>
                            @endforeach
                        </td>
                        @else
                        <td colspan="3">Jadwal Dokter Kosong</td>
                        @endif

                        <td>
                            <a href="{{ route('dokter.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('dokter.destroy', $doctor->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" onclick="return confirmDelete()"
                                    class="btn btn-danger">Hapus</button>

                                <script>
                                    function confirmDelete() {
                                        return confirm('Apakah Anda yakin ingin menghapus berita ini?');
                                    }
                                </script>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="pagination mt-3">
                {{ $doctors->links() }}
            </div>
        </div>
    </div>


</section>
<style>
    table {
        table-layout: fixed;
        /* Mengatur tabel agar menggunakan lebar kolom yang ditetapkan */
        width: 100%;
        /* Memastikan tabel menggunakan lebar penuh */
    }

    .small-column {
        overflow: hidden;
        /* Menyembunyikan konten yang meluap */
        text-overflow: ellipsis;
        /* Menambahkan elipsis untuk konten yang meluap */
        white-space: nowrap;
        word-wrap: break-word;
        /* Memaksa kata untuk membungkus jika perlu */
        /* Mencegah teks memanjang ke baris baru */
    }

    .table td,
    .table th {
        word-wrap: break-word;
        white-space: normal;
    }
</style>
@endsection