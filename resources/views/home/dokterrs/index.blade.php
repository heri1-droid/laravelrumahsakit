



<link href="{{ asset('css/profil.css') }}" rel="stylesheet" />
<link href="{{ asset('css/dokter.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


<div style="background: radial-gradient(circle, #ffffff, #fffdf9);">
<!-- Page Header awal -->
<section class="intro-section img-download-section" id="dokter_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center header-section header-section-light">
                <h1 class="text-light">Dokter</h1>
                <small class="text-light">Dokter RSI Ar-Rasyid Palembang</small>
            </div>
        </div>
    </div>
</section>
<!-- Page Header End -->

<div class="page-section" >
    <div class="container mt-5">
        <div class="row mb-4 justify-content-center">
            <div class="col-md-4">
                <form method="GET" action="{{ url('cari-dokter') }}" class="d-flex search-form justify-content-center align-items-center">
                    <input type="text" name="nama" class="form-control" style="width: 300px; padding: 0.5rem; margin-right: 10px;" placeholder="Nama Dokter" value="{{ request()->input('nama') }}">
                    <select name="spesialis" class="form-control" style="width: 200px; padding: 0.5rem; margin-right: 10px;">

                        <option value="">Pilih Spesialis</option>
                        <option value="THT" {{ request()->input('spesialis') == 'THT' ? 'selected' : '' }}>THT</option>
                        <option value="Penyakit Dalam" {{ request()->input('spesialis') == 'Penyakit Dalam' ? 'selected' : '' }}>Penyakit Dalam</option>
                        <option value="Saraf" {{ request()->input('spesialis') == 'Saraf' ? 'selected' : '' }}>Saraf</option>
                        <option value="Bedah" {{ request()->input('spesialis') == 'Bedah' ? 'selected' : '' }}>Bedah</option>
                        <option value="OBGYN" {{ request()->input('spesialis') == 'OBGYN' ? 'selected' : '' }}>OBGYN</option>
                        <option value="Anak" {{ request()->input('spesialis') == 'Anak' ? 'selected' : '' }}>Anak</option>
                        <option value="Gigi" {{ request()->input('spesialis') == 'Gigi' ? 'selected' : '' }}>Gigi</option>
                        <option value="Jantung" {{ request()->input('spesialis') == 'Jantung' ? 'selected' : '' }}>Jantung</option>
                        <option value="Mata" {{ request()->input('spesialis') == 'Mata' ? 'selected' : '' }}>Mata</option>
                        <option value="Ginjal" {{ request()->input('spesialis') == 'Ginjal' ? 'selected' : '' }}>Ginjal</option>
                        <option value="Orthopedi" {{ request()->input('spesialis') == 'Orthopedi' ? 'selected' : '' }}>Orthopedi</option>
                        <option value="Bedah Mulut" {{ request()->input('spesialis') == 'Bedah Mulut' ? 'selected' : '' }}>Bedah Mulut</option>
                        <option value="Kesehatan Jiwa" {{ request()->input('spesialis') == 'Kesehatan Jiwa' ? 'selected' : '' }}>Kesehatan Jiwa</option>
                        <option value="Kulit & Kelamin" {{ request()->input('spesialis') == 'Kulit & Kelamin' ? 'selected' : '' }}>Kulit & Kelamin</option>
                        <option value="Rehabilitas Medik" {{ request()->input('spesialis') == 'Rehabilitas Medik' ? 'selected' : '' }}>Rehabilitas Medik</option>
                        <option value="Urologi" {{ request()->input('spesialis') == 'Urologi' ? 'selected' : '' }}>Urologi</option>
                        <option value="Radiologi" {{ request()->input('spesialis') == 'Radiologi' ? 'selected' : '' }}>Radiologi</option>

                    </select>
                    <button class="btn btn-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
        <div class="row">
            @foreach ($doctors as $doctor)
            <div class="col-md-3 mb-4">
                <div class="card text-center card-doktor-page" data-aos="fade-up" data-aos-duration="900">
                    <div class="img mb-2">
                        <img src="{{ asset("/storage/doctor/{$doctor->foto}") }}" alt="Dokter Umum" class="rounded-circle shadow-sm" width="150" height="150">
                    </div>
                    <h6 class="mb-0">{{ $doctor->nama }}</h6>
                    <p class="text-success pt-2"><i class="fas fa-stethoscope"></i>&nbsp;Dokter {{ $doctor->spesialis }}</p>
                    <div class="mt-1 mb-2 apointment">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $doctor->id }}">
                            &nbsp;<i class="fas fa-search"></i> Lihat dokter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $doctor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $doctor->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background: radial-gradient(circle, #2da14a, #0d7b26);">
                            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel{{ $doctor->id }}">{{ $doctor->nama }}</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h5 style="color: #2da14a;"><i class="fas fa-calendar-alt"></i> Jadwal Dokter</h5>
                                    <table class="table table-bordered table-hover shadow-sm">
                                        <thead class="bg-light">
                                            <tr>
                                                <th rowspan="2" class="align-middle text-center">Hari</th>
                                                <th scope="col" colspan="2" class="text-center">Jam</th>
                                            </tr>
                                            <tr class="text-center">
                                                <td>Mulai</td>
                                                <td>Selesai</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($doctor->schedules->isNotEmpty())
                                                @foreach($doctor->schedules as $schedule)
                                                <tr>
                                                    <td>{{ $schedule->day }}</td>
                                                    <td>{{ $schedule->start_time }}</td>
                                                    <td>{{ $schedule->end_time }}</td>
                                                </tr>
                                                @endforeach
                                            @else
                                            <tr>
                                                <td colspan="3">Jadwal Dokter Kosong</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <small class="text-muted d-block mt-2">*Jadwal dapat berubah sewaktu-waktu. Untuk info lebih lengkap, hubungi bagian <a href="https://api.whatsapp.com/send/?phone=628134168%204986&text=Halo%20RSI%20Ar-Rasyid%20Palembang&type=phone_number&app_absent=0" class="text-primary">Informasi RSI</a></small>
                                </div>
                                <div class="col-md-6 mb-4 text-center">
                                    <img src="{{ asset('/storage/doctor/' . $doctor->foto) }}" alt="Dokter Umum" class="rounded-circle shadow-sm" width="150" height="150">
                                    <h6 class="mt-3 text-success font-weight-bold">Dokter {{ $doctor->spesialis }}</h6>
                                    <p class="text-secondary">{{ $doctor->nama }}</p>
                                    {{-- <p class="text-secondary">{!! $doctor->desc !!}</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn text-white" style="background: radial-gradient(circle, #2da14a, #0d7b26);">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="d-flex justify-content-center">
            {{ $doctors->links() }}
        </div> --}}
        
        <div class="d-flex justify-content-center">
            {{ $doctors->links('vendor.pagination.bootstrap-4') }}
        </div>
        
    </div>
</div>

</div>

