@extends('home.admin.index')

@section('content')
<section style="margin-top: 0px; padding-bottom: 40px;">
    <div class="container col-xxl-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <a href="{{ route('dokter') }}" class="text-decoration-none text-primary">Dokter</a>
                <span class="mx-1"> &gt; </span>
                <a href="#" class="text-decoration-none text-secondary">Tambah Dokter</a>
                <h4>Halaman Tambah Dokter</h4>

            </div>
        </div>

        <form action="{{ route('dokter.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation"
            novalidate>
            @csrf
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label for="name">Nama Dokter</label>
                        <input type="text" name="nama" id="name"
                            class="form-control custom-width @error('nama') is-invalid @enderror" placeholder="Nama Dokter" required>
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="spesialis">Spesialisasi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <select name="spesialis" id="spesialis" class="form-control custom-width @error('spesialis') is-invalid @enderror" required>
                                <option value="" disabled selected>Pilih Spesialisasi</option>
                                <option value="THT">THT</option>
                                <option value="Penyakit Dalam">Penyakit Dalam</option>
                                <option value="Saraf">Saraf</option>
                                <option value="Bedah">Bedah</option>
                                <option value="OBGYN">OBGYN</option>
                                <option value="Anak">Anak</option>
                                <option value="Gigi">Gigi</option>
                                <option value="Jantung">Jantung</option>
                                <option value="Mata">Mata</option>
                                <option value="Ginjal">Ginjal</option>
                                <option value="Orthopedi">Orthopedi</option>
                                <option value="Bedah Mulut">Bedah Mulut</option>
                                <option value="Kesehatan Jiwa">Kesehatan Jiwa</option>
                                <option value="Kulit & Kelamin">Kulit & Kelamin</option>
                                <option value="Rehabilitas Medik">Rehabilitas Medik</option>
                                <option value="Urologi">Urologi</option>
                                <option value="Radiologi">Radiologi</option>
                                <option value="Radiologi">Radiologi</option>
                            </select>
                        </div>

                        @error('spesialis')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <div class="form-group mb-4">
                        <label for="description">Deskripsi</label>
                        <textarea name="desc" id="summernote">{{old('desc')}}</textarea>
                        @error('desc')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label for="photo">Foto Dokter</label>
                        <input type="file" name="foto" id="foto"
                            class="form-control @error('foto') is-invalid @enderror" required>
                        @error('foto')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <h5>Jadwal Dokter</h5>
                    <div class="form-group mb-4">
                        @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $day)
                        <div class="row align-items-center mb-2">
                            <label class="col-sm-2 col-form-label">{{ $day }}:</label>
                            <div class="col-sm-5">
                                <input type="time" name="schedules[{{ $day }}][start_time]" class="form-control">
                            </div>
                            <div class="col-sm-5">
                                <input type="time" name="schedules[{{ $day }}][end_time]" class="form-control">
                            </div>
                        </div>
                        @endforeach
                        @error('day')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        @error('start_time')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        @error('end_time')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</section>
<style>
    .custom-width {
        width: 60%;
        /* Atau Anda bisa menggunakan nilai seperti 300px */
    }
</style>

@endsection