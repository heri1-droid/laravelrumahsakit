@extends('home.admin.index')

@section('content')
<section style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container col-xxl-9">
        <h3 class="fw-bold mb-2">Halaman Berita Informasi</h3>
        <a href="{{ route('berita.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Buat Berita
        </a>
        <hr>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-4">
                    <form action="{{ url('berita-cari') }}" method="GET">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="text" name="cari" class="form-control" placeholder="Cari berita...">
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
            <strong>Informasi </strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dissmiss="alert" arial-label="Close"></button>
        </div>
        @endif
        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>images</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no = $artikels->firstItem();
                    @endphp
                    @foreach ($artikels as $artikel)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ asset("/storage/artikel/{$artikel->image}") }}" height="100" width="100"
                                alt="">
                        </td>
                        <td style="max-width: 250px; overflow-wrap: anywhere; word-break: break-word;">
                            {{ $artikel->judul }}
                        </td>
                        <td>
                            <a href="{{route('berita.edit', $artikel->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('berita.destroy', $artikel->id)}}" method="POST" class="d-inline">
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
            <div class="pagination mt-3">
                {{ $artikels->links() }}
            </div>
        </div>
    </div>
</section>
@endsection