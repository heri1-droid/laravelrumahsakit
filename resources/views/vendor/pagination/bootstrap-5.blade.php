{{-- Pagination Elements --}}
@foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                {{-- Halaman Saat Ini --}}
                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
            @elseif ($page == 1 || $page == $paginator->lastPage() || abs($page - $paginator->currentPage()) <= 2)
                {{-- Halaman di Sekitar Halaman Aktif --}}
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @elseif ($loop->first || $loop->last)
                {{-- Tampilkan Titik Tiga --}}
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif
        @endforeach
    @endif
@endforeach
