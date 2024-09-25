@extends('home.admin.index')

@section('content')
<section style="margin-top: 0px; padding-bottom: 40px;">
    <div class="container col-xxl-12">
        <div class="d-flex">
            <a href="{{route('layanan')}}">Layanan</a>
            <div class="mx-1"> . </div>
            <a href="">Buat Layanan</a>
        </div>

        <h4>Halaman Buat Layanan</h4>
        <form action="{{route('layanan.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-groub mb-4">
                <label for="">Masukan nama layanan</label>
                <input type="text" class="form-control custom-width @error('layanan') is-invalid @enderror" name="layanan" value="{{old('layanan')}}">

                @error('layanan')
                <div class="inalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-groub mb-4">
                <label for="">Pilih icon layanan</label>
                <input type="file" class="form-control custom-width @error('image') is-invalid @enderror" name="image">

                @error('image')
                <div class="inalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-groub mb-4">
                <label for=""> Layanan</label>
                <textarea name="desc" id="summernote">
                {{old('desc')}}
                </textarea>

                @error('desc')
                <div class="text-danger">
                    {{$message}}
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
        /* Atau Anda bisa menggunakan nilai seperti 300px */
    }
</style>


@endsection