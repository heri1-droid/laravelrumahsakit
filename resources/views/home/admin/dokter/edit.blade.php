@extends('home.admin.index')

@section('content')
    <section style="margin-top: 0px; padding-bottom: 40px;">
        <div class="container col-xxl-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <a href="{{ route('dokter') }}" class="text-decoration-none text-primary">Dokter</a>
                    <span class="mx-1"> &gt; </span>
                    <a href="#" class="text-decoration-none text-secondary">Edit Dokter</a>
                    <h4>Halaman Edit Dokter</h4>

                </div>
            </div>

            <form action="{{ route('dokter.update', $doctor->id) }}" method="POST" enctype="multipart/form-data"
                class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <!-- Kolom 1 -->
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="name">Nama Dokter</label>
                            <input type="text" name="nama" id="name"
                                class="form-control custom-width @error('nama') is-invalid @enderror"
                                value="{{ old('nama', $doctor->nama) }}" placeholder="Nama Dokter" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="specialization">Spesialisasi</label>
                            <select name="spesialis" id="spesialis"
                                class="form-control custom-width @error('spesialis') is-invalid @enderror" required>
                                <option value="" disabled
                                    {{ old('spesialis', $doctor->spesialis) ? '' : 'selected' }}>Pilih Spesialisasi</option>
                                <option value="THT"
                                    {{ old('spesialis', $doctor->spesialis) == 'THT' ? 'selected' : '' }}>THT</option>
                                <option value="Penyakit Dalam"
                                    {{ old('spesialis', $doctor->spesialis) == 'Penyakit Dalam' ? 'selected' : '' }}>
                                    Penyakit Dalam</option>
                                <option value="Saraf"
                                    {{ old('spesialis', $doctor->spesialis) == 'Saraf' ? 'selected' : '' }}>Saraf</option>
                                <option value="Bedah"
                                    {{ old('spesialis', $doctor->spesialis) == 'Bedah' ? 'selected' : '' }}>Bedah</option>
                                <option value="OBGYN"
                                    {{ old('spesialis', $doctor->spesialis) == 'OBGYN' ? 'selected' : '' }}>OBGYN</option>
                                <option value="Anak"
                                    {{ old('spesialis', $doctor->spesialis) == 'Anak' ? 'selected' : '' }}>Anak</option>
                                <option value="Gigi"
                                    {{ old('spesialis', $doctor->spesialis) == 'Gigi' ? 'selected' : '' }}>Gigi</option>
                                <option value="Jantung"
                                    {{ old('spesialis', $doctor->spesialis) == 'Jantung' ? 'selected' : '' }}>Jantung
                                </option>
                                <option value="Mata"
                                    {{ old('spesialis', $doctor->spesialis) == 'Mata' ? 'selected' : '' }}>Mata</option>
                                <option value="Ginjal"
                                    {{ old('spesialis', $doctor->spesialis) == 'Ginjal' ? 'selected' : '' }}>Ginjal
                                </option>
                                <option value="Orthopedi"
                                    {{ old('spesialis', $doctor->spesialis) == 'Orthopedi' ? 'selected' : '' }}>Orthopedi
                                </option>
                                <option value="Bedah Mulut"
                                    {{ old('spesialis', $doctor->spesialis) == 'Bedah Mulut' ? 'selected' : '' }}>Bedah
                                    Mulut</option>
                                <option value="Kesehatan Jiwa"
                                    {{ old('spesialis', $doctor->spesialis) == 'Kesehatan Jiwa' ? 'selected' : '' }}>
                                    Kesehatan Jiwa</option>
                                <option value="Kulit & Kelamin"
                                    {{ old('spesialis', $doctor->spesialis) == 'Kulit & Kelamin' ? 'selected' : '' }}>Kulit
                                    & Kelamin</option>
                                <option value="Rehabilitas Medik"
                                    {{ old('spesialis', $doctor->spesialis) == 'Rehabilitas Medik' ? 'selected' : '' }}>
                                    Rehabilitas Medik</option>
                                <option value="Urologi"
                                    {{ old('spesialis', $doctor->spesialis) == 'Urologi' ? 'selected' : '' }}>Urologi
                                </option>
                                <option value="Radiologi"
                                    {{ old('spesialis', $doctor->spesialis) == 'Radiologi' ? 'selected' : '' }}>Radiologi
                                </option>
                            </select>


                            @error('spesialis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="description">Deskripsi</label>
                            <textarea name="desc" id="summernote">
                             {!! $doctor->desc !!}
                        </textarea>
                            @error('desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Pilih Foto kegiatan</label>
                            <input type="hidden" name="old_image" value="{{ $doctor->foto }}">
                            <div>
                                <img src="{{ asset("/storage/doctor/{$doctor->foto}") }}" class="col-lg-4" alt="">
                            </div>
                            <input type="file" name="foto" id="foto"
                                class="form-control @error('foto') is-invalid @enderror" required>
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <h5>Jadwal Dokter</h5>
                        <div class="form-group mb-4">
                            @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $day)
                                <div class="row align-items-center mb-2">
                                    <label class="col-sm-2 col-form-label">{{ $day }}:</label>
                                    <div class="col-sm-5">
                                        <input type="time" name="schedules[{{ $day }}][start_time]"
                                            class="form-control">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="time" name="schedules[{{ $day }}][end_time]"
                                            class="form-control">
                                    </div>
                                </div>
                            @endforeach
                            @error('day')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @error('start_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @error('end_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">UPDATE</button>
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
