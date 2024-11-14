@extends('home.admin.index')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<section style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container col-xxl-11">
        <h3 class="fw-bold mb-2">Halaman Pesan</h3>
        <hr>
        @if (session()->has('success'))
        <div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi </strong>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>date</th>
                        <th>Nama</th>
                        <th>Rating</th>
                        <th>Ulasan</th>
                        <th>WhatsApp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = ($pesan->currentPage() - 1) * $pesan->perPage() + 1;
                    @endphp
                    @foreach ($pesan as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <=$item->rate)
                                <i class="fa fa-star" style="color: #ffc107;"></i>
                                @else
                                <i class="fa fa-star" style="color: #ddd;"></i>
                                @endif
                                @endfor
                        </td>
                        <td style="max-width: 250px; overflow-wrap: anywhere; word-break: break-word;">{{ $item->ulasan }}</td>
                        <td>{{ $item->no }}</td>
                        <td>
                            <form action="{{ route('pesan.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE') <!-- Pastikan Anda menggunakan method DELETE -->
                                <button type="submit" onclick="return confirmDelete()" class="btn btn-danger">Hapus</button>

                                <script>
                                    function confirmDelete() {
                                        return confirm('Apakah Anda yakin ingin menghapus pesan ini?');
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
                {{ $pesan->links() }}
            </div>
        </div>
    </div>


</section>
@endsection