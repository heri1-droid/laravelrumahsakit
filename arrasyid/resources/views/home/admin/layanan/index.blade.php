@extends('home.admin.index')

@section('content')
<section style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container col-xxl-8">
        <h3 class="fw-bold mb-2">Halaman Layanan</h3>
        <hr>
        <a href="{{ route('layanan.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Buat Layanan
        </a>
        @if (session()->has('success'))
        <div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi </strong>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Nama Layanan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no = $layanans->firstItem();
                    @endphp
                    @foreach ($layanans as $layanan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ asset("/storage/layanan/{$layanan->image}") }}" height="100" width="100" alt="">
                        </td>
                        <td style="max-width: 250px; overflow-wrap: anywhere; word-break: break-word;">
                            {{ $layanan->layanan }}
                        </td>
                        <td>
                            <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" onclick="return confirmDelete()" class="btn btn-danger">Hapus</button>

                                <script>
                                    function confirmDelete() {
                                        return confirm('Apakah Anda yakin ingin menghapus layanan ini?');
                                    }
                                </script>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination mt-3">
                {{ $layanans->links() }}
            </div>
        </div>
    </div>
</section>
@endsection