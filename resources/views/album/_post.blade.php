<div class="card mb-4 shadow-sm">
  <div class="card-body">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-start mb-2">

      <!-- PROFIL -->
      <div class="d-flex align-items-center">
        <img src="{{ $album->user->profil_photo
            ? asset('profil/'.$album->user->profil_photo)
            : 'https://ui-avatars.com/api/?name='.urlencode($album->user->name).'&background=198754&color=fff'
        }}"
        class="rounded-circle me-2"
        width="40"
        height="40"
        style="object-fit:cover;">

        <div class="lh-sm">
          <strong class="text-dark">{{ $album->user->name }}</strong><br>
          <small class="text-muted">{{ $album->created_at->diffForHumans() }}</small>
        </div>
      </div>

      <!-- TITIK 3 (EDIT & HAPUS POSTINGAN) -->
      @auth
      @if(auth()->id() === $album->user_id || auth()->user()->role === 'admin')
      <div class="dropdown">
        <button class="btn btn-sm bg-transparent border-0 p-0"
                data-bs-toggle="dropdown"
                aria-expanded="false">
          <i class="bi bi-three-dots-vertical fs-5"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a href="{{ route('album.edit', $album->id) }}" class="dropdown-item">
              <i class="bi bi-pencil-square me-2 text-success"></i>Edit
            </a>
          </li>
          <li>
            <form action="{{ route('album.destroy', $album->id) }}"
                  method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus postingan ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="dropdown-item text-danger">
                <i class="bi bi-trash me-2"></i>Hapus
              </button>
            </form>
          </li>
        </ul>
      </div>
      @endif
      @endauth

    </div>

    <!-- CAPTION -->
    @if($album->caption)
      <p class="mb-2">{{ $album->caption }}</p>
    @endif

    <!-- GAMBAR -->
    @if($album->media && \Illuminate\Support\Str::endsWith($album->media, ['jpg','jpeg','png','webp']))
      <img src="{{ asset('storage/'.$album->media) }}"
           class="img-fluid rounded w-100">
    @endif

    {{-- LIKE & KOMENTAR PUNYA KAMU --}}
  </div>
</div>
