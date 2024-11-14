@extends('home.admin.index')

@section('content')
    <section style="margin-top: 40px; margin-bottom:20px;">
        <div class="container col-xxl-12">
            <div class="d-flex">
                <a href="{{route('layanan')}}">Layanan</a>
                <div class="mx-1"> . </div>
                <a href="">Edit Layanan</a>
            </div>
            <h4>Halaman Edit Layanan</h4>

            <form action="{{route('layanan.update', $layanan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-groub mb-4">
                    <label for="">Masukan Nama Layanan</label>
                    <input type="text" class="form-control @error('layanan') is-invalid @enderror" name="layanan" value="{{old('layanan', $layanan->layanan)}}">

                    @error('layanan')
                    <div class="inalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-groub mb-4">
                    <label for="">Pilih icon layanan</label>
                    <input type="hidden" name="old_image" value="{{$layanan->image}}">
                    <div>
                        <img src="{{ asset("/storage/layanan/{$layanan->image}") }}" class="col-lg-4" alt="">
                    </div>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                    @error('image')
                    <div class="inalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-groub mb-4">
                    <label for="">Deskripsi Layanan</label>
                    <textarea name="desc" id="summernote">
                        {!! $layanan->desc !!}
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