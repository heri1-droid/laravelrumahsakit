@extends('home.admin.index')

@section('content')
    <section style="margin-top: 40px; margin-bottom:20px;">
        <div class="container col-xxl-8">
            <div class="d-flex">
                <a href="{{route('berita')}}">Berita</a>
                <div class="mx-1"> . </div>
                <a href="">Edit Artikel</a>
            </div>
            <h4>Halaman Edit artikel</h4>

            <form action="{{route('berita.update', $artikel->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-groub mb-4">
                    <label for="">Masukan Judul kegiatan</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{old('judul', $artikel->judul)}}">

                    @error('judul')
                    <div class="inalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-groub mb-4">
                    <label for="">Pilih Foto  kegiatan</label>
                    <input type="hidden" name="old_image" value="{{$artikel->image}}">
                    <div>
                        <img src="{{ asset("/storage/artikel/{$artikel->image}") }}" class="col-lg-4" alt="">
                    </div>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                    @error('image')
                    <div class="inalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-groub mb-4">
                    <label for="">Artikel Berita</label>
                    <textarea name="desc" id="summernote">
                        {!! $artikel->desc !!}
                    </textarea>

                    @error('desc')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </section>
    
@endsection