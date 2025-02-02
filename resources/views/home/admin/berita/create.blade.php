@extends('home.admin.index')

@section('content')
    <section style="margin-top: 0px; padding-bottom: 50px;">
        <div class="container col-xxl-12">
            <div class="d-flex">
                <a href="{{ route('berita') }}">Berita</a>
                <div class="mx-1"> . </div>
                <a href="">Buat Artikel</a>
            </div>

            <h4>Halaman Buat Artikel</h4>
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-groub mb-4">
                    <label for="">Masukan Judul Berita</label>
                    <input type="text" class="form-control custom-width @error('judul') is-invalid @enderror"
                        name="judul" value="{{ old('judul') }}">

                    @error('judul')
                        <div class="inalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-groub mb-4">
                    <label for="">Pilih Foto kegiatan</label>
                    <input type="file" class="form-control custom-width @error('image') is-invalid @enderror"
                        name="image">

                    @error('image')
                        <div class="inalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-groub mb-4">
                    <label for="">Artikel Berita</label>
                    <textarea name="desc" id="summernote" class="custom-textarea">
                        {{ old('desc') }}
                    </textarea>

                    @error('desc')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </section>

    <style>
        .custom-width {
            width: 30%;
        }

        .custom-textarea {
            height: 200px;
        }
    </style>
@endsection
