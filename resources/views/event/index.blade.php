@extends('layouts.app')

@section('content')

<style>

.acara-title {
    color: #198754; /* hijau bootstrap */
}

/* tombol close */
.modal-header .btn-close {
    background-image: none !important; /* matikan X bootstrap */
    border-radius: 6px;               /* kotak */
    opacity: 1;
    position: relative;
}

/* bikin X manual */
.modal-header .btn-close::before {
    content: "✕";
    font-size: 20px;
    font-weight: bold;
    color: #6c757d; /* abu saat normal */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/* hover merah + X putih */
.modal-header .btn-close:hover {
    background-color: #dc3545 !important;
}

.modal-header .btn-close:hover::before {
    color: #fff;
}



</style>



<div class="container py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
<h3 class="fw-bold acara-title">Acara Mendatang</h3>
        @auth
            @if(Auth::user()->role === 'admin')
                <a href="{{ route('event.create') }}" class="btn btn-success">
                    + Tambah Acara
                </a>
            @endif
        @endauth
    </div>

    <div class="row">
        @forelse($events as $event)
            <div class="col-md-4 mb-4">

                {{-- CARD --}}
                <div class="card shadow-sm h-100 event-card"
                     style="cursor:pointer"
                     data-title="{{ $event->title }}"
                     data-desc="{{ $event->description }}"
                     data-image="{{ $event->image ? asset('storage/'.$event->image) : '' }}"
                     data-time="{{ \Carbon\Carbon::parse($event->event_time)->timestamp }}">

                    @if($event->image)
                        <img src="{{ asset('storage/'.$event->image) }}"
                             class="card-img-top"
                             alt="Acara">
                    @endif

                    <div class="card-body position-relative">

                        {{-- ADMIN BUTTON --}}
                        @auth
                            @if(Auth::user()->role === 'admin')
                                <div class="position-absolute top-0 end-0 p-2 d-flex gap-1"
                                     onclick="event.stopPropagation()">

                                    <a href="{{ route('event.edit', $event->id) }}"
                                       class="btn btn-sm btn-warning">
                                        ✏️
                                    </a>

                                    <form action="{{ route('event.destroy', $event->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin hapus acara ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endauth

                        <h5 class="fw-bold">{{ $event->title }}</h5>
                        <p class="small">{{ $event->description }}</p>

                        {{-- TANGGAL & JAM --}}
                        <div class="fw-bold text-success">
                            📅 {{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('d F Y') }}
                        </div>
                        <div class="fw-bold text-success mb-2">
                            ⏰ {{ \Carbon\Carbon::parse($event->event_time)->format('H:i') }} WIB
                        </div>

                        {{-- COUNTDOWN --}}
                        <div class="fw-bold text-success countdown">
                            ⏳ Memuat...
                        </div>

                    </div>
                </div>

            </div>
        @empty
            <div class="col-12 text-center">
                <div class="alert alert-info">Belum ada acara</div>
            </div>
        @endforelse
    </div>

</div>

{{-- =======================
     MODAL DETAIL
     ======================= --}}
<div class="modal fade" id="eventModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="eventModalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">

                {{-- GAMBAR TENGAH --}}
                <div class="d-flex justify-content-center align-items-center mb-3"
                     style="min-height:70vh">
                    <img id="eventModalImage"
                         class="img-fluid rounded"
                         style="max-height:70vh; object-fit:contain; display:none">
                </div>

                <p id="eventModalDesc"></p>

                <a id="eventDownloadBtn"
                   class="btn btn-success mt-3"
                   download
                   style="display:none">
                    ⬇️ Download Gambar
                </a>

            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.event-card').forEach(card => {

        /* ========== COUNTDOWN ========== */
        const countdownEl = card.querySelector('.countdown');
        const target = parseInt(card.dataset.time) * 1000;

        function updateCountdown() {
            let diff = target - Date.now();

            if (diff <= 0) {
                countdownEl.innerHTML = "🎉 Acara sedang berlangsung";
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            diff %= (1000 * 60 * 60 * 24);

            const hours = Math.floor(diff / (1000 * 60 * 60));
            diff %= (1000 * 60 * 60);

            const minutes = Math.floor(diff / (1000 * 60));
            const seconds = Math.floor((diff / 1000) % 60);

            countdownEl.innerHTML =
                `⏳ ${days} hari ${hours} jam ${minutes} menit ${seconds} detik`;
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);

        /* ========== MODAL ========== */
        card.addEventListener('click', () => {

            document.getElementById('eventModalTitle').innerText =
                card.dataset.title;

            document.getElementById('eventModalDesc').innerText =
                card.dataset.desc;

            const img = document.getElementById('eventModalImage');
            const btn = document.getElementById('eventDownloadBtn');

            if (card.dataset.image) {
                img.src = card.dataset.image;
                img.style.display = 'block';

                btn.href = card.dataset.image;
                btn.style.display = 'inline-block';
            } else {
                img.style.display = 'none';
                btn.style.display = 'none';
            }

            new bootstrap.Modal(
                document.getElementById('eventModal')
            ).show();
        });

    });

});
</script>
@endpush
