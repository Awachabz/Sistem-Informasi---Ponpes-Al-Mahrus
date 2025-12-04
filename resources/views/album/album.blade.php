@extends('layouts.app')

@section('content')
<div class="container py-5">
  <h2 class="fw-bold text-success mb-4 text-center">Album Santri</h2>

  <!-- ✅ Notifikasi sukses -->
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <!-- ✅ Form posting hanya untuk admin dan user -->
@auth
@if (Auth::user()->role === 'admin' || Auth::user()->role === 'user')
<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <textarea name="caption" class="form-control mb-3" rows="3" placeholder="Apa yang sedang kamu pikirkan?" required></textarea>

            <!-- PILIH PRIVASI -->
            <select name="privacy" class="form-select mb-3" required>
                <option value="public">Publik (semua bisa lihat)</option>
                <option value="private">Privasi (hanya admin & user)</option>
            </select>

       <input type="file" name="media" class="form-control mb-3" accept=".jpg,.jpeg,.png,.mp4,.mov,.avi">

            <button class="btn btn-success">
                <i class="bi bi-send-fill me-1"></i> Posting
            </button>
        </form>
    </div>
</div>
@endif
@endauth


  <!-- ✅ Daftar postingan publik -->
  @forelse ($albums as $album)
  <div class="card mb-4 shadow-sm">
    <div class="card-body">
      <!-- Header posting -->
      <div class="d-flex align-items-center justify-content-between mb-2">
        <div class="d-flex align-items-center">
          <img src="https://ui-avatars.com/api/?name={{ urlencode($album->user->name) }}&background=198754&color=fff" 
               class="rounded-circle me-2" width="40" height="40" alt="{{ $album->user->name }}">
          <div>
            <strong>{{ $album->user->name }}</strong><br>
            <small class="text-muted">{{ $album->created_at->diffForHumans() }}</small>
          </div>
        </div>

        <!-- Dropdown titik tiga -->
        @auth
          @if(Auth::user()->role === 'admin' || Auth::id() === $album->user_id)
          <div class="dropdown">
            <button class="btn btn-sm bg-transparent border-0 p-0" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset('images/titik3.png') }}" alt="Menu" class="titik3-icon">
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a href="{{ route('album.edit', $album->id) }}" class="dropdown-item">
                  <i class="bi bi-pencil-square me-2 text-success"></i> Edit
                </a>
              </li>
              <li>
                <form action="{{ route('album.destroy', $album->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus postingan ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item text-danger">
                    <i class="bi bi-trash me-2"></i> Hapus
                  </button>
                </form>
              </li>
            </ul>
          </div>
          @endif
        @endauth
      </div>

      <!-- Caption -->
      <p class="mb-3">{{ $album->caption }}</p>

      <!-- Media -->
      @if($album->media)
        @if(Str::endsWith($album->media, ['.jpg', '.jpeg', '.png']))
          <img src="{{ asset('storage/'.$album->media) }}" class="img-fluid rounded w-100 mb-2">
        @elseif(Str::endsWith($album->media, ['.mp4', '.mov', '.avi']))
          <video controls class="w-100 rounded mb-2">
            <source src="{{ asset('storage/'.$album->media) }}">
            Browser kamu tidak mendukung video.
          </video>
        @endif
      @endif

      <!-- 👍 Like dan 💬 Komentar -->
      <div class="d-flex align-items-center mb-3">
        @auth
          <!-- Tombol Like -->
          <button class="like-btn me-2" data-id="{{ $album->id }}">
            <img src="{{ asset('images/' . ($album->likes->where('user_id', Auth::id())->count() ? 'like-active.png' : 'like.png')) }}" 
                 width="34" height="34" alt="Like" class="like-icon">
          </button>
        @endauth
        <span id="like-count-{{ $album->id }}">{{ $album->likes->count() }}</span>&nbsp;&nbsp;Suka

        <!-- Tombol Komentar -->
        <div class="d-flex align-items-center ms-4">
          <button class="comment-btn me-2" data-id="{{ $album->id }}">
            <img src="{{ asset('images/komentar.png') }}" width="34" height="34" alt="Komentar" class="comment-icon">
          </button>
          <span id="comment-count-{{ $album->id }}">{{ $album->comments->count() }}</span>&nbsp;&nbsp;Komentar
        </div>
      </div>

      <!-- 💬 Komentar -->
      <div class="border-top pt-3">
        @foreach ($album->comments as $comment)
          <div class="mb-3" data-comment-id="{{ $comment->id }}">
            <div class="d-flex align-items-start justify-content-between">
              <div class="d-flex">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($comment->user->name) }}&background=0d6efd&color=fff"
                     class="rounded-circle me-2" width="35" height="35" alt="{{ $comment->user->name }}">
                <div class="flex-grow-1">
                  <div class="bg-light p-2 rounded">
                    <strong>{{ $comment->user->name }}</strong>
                    <p class="mb-1">{{ $comment->content }}</p>
                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                  </div>

                  <!-- Balasan -->
                  @foreach ($comment->replies as $reply)
                    <div class="d-flex align-items-start justify-content-between mt-2 ms-4" data-comment-id="{{ $reply->id }}">
                      <div class="d-flex">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($reply->user->name) }}&background=6c757d&color=fff"
                             class="rounded-circle me-2" width="30" height="30" alt="{{ $reply->user->name }}">
                        <div class="bg-white p-2 rounded border">
                          <strong>{{ $reply->user->name }}</strong>
                          <p class="mb-1">{{ $reply->content }}</p>
                          <small class="text-muted">{{ $reply->created_at->diffForHumans() }}</small>
                        </div>
                      </div>

                      <!-- Dropdown untuk balasan -->
                      @auth
                        @if(Auth::id() === $reply->user_id || Auth::user()->role === 'admin')
                        <div class="dropdown">
                          <button class="btn btn-sm bg-transparent border-0 p-0" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/titik3.png') }}" alt="Menu" class="titik3-icon">
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <button class="dropdown-item text-success edit-comment-btn">
                                <i class="bi bi-pencil-square me-2"></i>Edit
                              </button>
                            </li>
                            <li>
                              <form action="{{ route('comments.destroy', $reply->id) }}" method="POST" class="m-0 delete-comment-form">
                                @csrf @method('DELETE')
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
                  @endforeach

                  <!-- Form balasan -->
                  @auth
                  <form action="{{ route('comments.store') }}" method="POST" class="mt-2 ms-4 comment-form">
                    @csrf
                    <input type="hidden" name="album_id" value="{{ $album->id }}">
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                    <input type="text" name="content" class="form-control form-control-sm" placeholder="Balas komentar..." required>
                  </form>
                  @endauth
                </div>
              </div>

              <!-- Dropdown untuk komentar utama -->
              @auth
                @if(Auth::id() === $comment->user_id || Auth::user()->role === 'admin')
                <div class="dropdown">
                  <button class="btn btn-sm bg-transparent border-0 p-0" data-bs-toggle="dropdown">
                    <img src="{{ asset('images/titik3.png') }}" alt="Menu" class="titik3-icon">
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <button class="dropdown-item text-success edit-comment-btn">
                        <i class="bi bi-pencil-square me-2"></i>Edit
                      </button>
                    </li>
                    <li>
                      <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="m-0 delete-comment-form">
                        @csrf @method('DELETE')
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
          </div>
        @endforeach

        <!-- Form komentar baru -->
        @auth
        <form action="{{ route('comments.store') }}" method="POST" class="mt-3 comment-form">
          @csrf
          <input type="hidden" name="album_id" value="{{ $album->id }}">
          <input type="text" name="content" class="form-control" placeholder="Tulis komentar..." required>
        </form>
        @endauth
      </div>

    </div>
  </div>
  @empty
  <div class="text-center text-muted py-5">
    <i class="bi bi-images display-6 d-block mb-3"></i>
    <p>Belum ada postingan di album.</p>
  </div>
  @endforelse
</div>

<style>
.like-btn,
.comment-btn {
  border: none;
  background: transparent;
  padding: 0;
  cursor: pointer;
  transition: transform 0.15s ease-in-out;
}
.like-btn:hover,
.comment-btn:hover { transform: scale(1.15); }

.like-icon, .comment-icon {
  width: 34px;
  height: 34px;
  object-fit: contain;
}

/* ✅ Titik 3 styling */
.titik3-icon {
  width: 40px;
  height: 40px;
  object-fit: contain;
  background: transparent !important;
  border: none !important;
  padding: 0;
  display: block;
}
</style>

{{-- 👍 Script AJAX Like --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.like-btn').forEach(btn => {
    btn.addEventListener('click', async () => {
      const albumId = btn.dataset.id;
      const res = await fetch(`/album/${albumId}/like`, {
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept': 'application/json' }
      });
      const data = await res.json();
      document.getElementById(`like-count-${albumId}`).textContent = data.likes;
      const img = btn.querySelector('img');
      img.src = data.liked
        ? "{{ asset('images/like-active.png') }}"
        : "{{ asset('images/like.png') }}";
    });
  });

  document.querySelectorAll('.comment-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const commentSection = btn.closest('.card-body').querySelector('.border-top');
      if (commentSection) commentSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  document.addEventListener('submit', async e => {
    if (e.target.classList.contains('comment-form')) {
      e.preventDefault();
      const form = e.target;
      const res = await fetch(form.action, {
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
        body: new FormData(form)
      });
      if (res.ok) location.reload();
    }
    if (e.target.classList.contains('delete-comment-form')) {
      e.preventDefault();
      if (!confirm('Yakin ingin menghapus komentar ini?')) return;
      const form = e.target;
      const res = await fetch(form.action, {
        method: 'DELETE',
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
      });
      if (res.ok) form.closest('[data-comment-id]').remove();
    }
  });

  document.addEventListener('click', e => {
    if (e.target.closest('.edit-comment-btn')) {
      e.preventDefault();
      const commentBox = e.target.closest('[data-comment-id]');
      const p = commentBox.querySelector('p.mb-1');
      const old = p.textContent.trim();
      p.outerHTML = `
        <form class="edit-comment-form mt-1">
          <input type="text" name="content" value="${old}" class="form-control form-control-sm">
          <div class="mt-1 d-flex gap-1">
            <button class="btn btn-sm btn-success">Simpan</button>
            <button type="button" class="btn btn-sm btn-secondary cancel-edit">Batal</button>
          </div>
        </form>`;
    }
  });

  document.addEventListener('click', e => {
    if (e.target.classList.contains('cancel-edit')) {
      const form = e.target.closest('.edit-comment-form');
      const old = form.querySelector('input[name="content"]').value;
      form.outerHTML = `<p class="mb-1">${old}</p>`;
    }
  });

  document.addEventListener('submit', async e => {
    if (e.target.classList.contains('edit-comment-form')) {
      e.preventDefault();
      const form = e.target;
      const commentBox = form.closest('[data-comment-id]');
      const id = commentBox.dataset.commentId;
      const content = form.querySelector('input[name="content"]').value;
      const res = await fetch(`/comments/${id}`, {
        method: 'PUT',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({ content })
      });
      if (res.ok) {
        const data = await res.json();
        form.outerHTML = `<p class="mb-1">${data.content}</p>`;
      }
    }
  });
});
</script>
@endsection
