@extends('layouts.app')

@section('content')
<div class="container py-5">
  <h2 class="fw-bold text-success mb-4 text-center">Postingan Santri</h2>

  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  @auth
  @if (Auth::user()->role === 'admin' || Auth::user()->role === 'user')
  <div class="card mb-4 shadow-sm">
      <div class="card-body">
          <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <textarea name="caption" class="form-control mb-3" rows="3" placeholder="Apa yang sedang kamu pikirkan?" required></textarea>

              <select name="privacy" class="form-select mb-3" required>
                  <option value="public">Publik (semua bisa lihat)</option>
                  <option value="private">Privasi (hanya admin & user)</option>
              </select>

              <input type="file" name="media" class="form-control mb-3" accept=".jpg,.jpeg,.png,.mp4,.mov,.avi">

              <button class="btn btn-success"><i class="bi bi-send-fill me-1"></i> Posting</button>
          </form>
      </div>
  </div>
  @endif
  @endauth


  @forelse ($albums as $album)

    <!-- {{-- 🔒 BLOKIR PRIVATE UNTUK GUEST --}} -->
    @if($album->privacy === 'private' && !auth()->check())
        @continue
    @endif

    <div class="card mb-4 shadow-sm">

    <div class="card-body">

      <!-- FOTO PROFIL USER -->
      <div class="d-flex align-items-center justify-content-between mb-2">
        <div class="d-flex align-items-center">

          @php
            $user = $album->user;
            $foto = $user->profil_photo 
                ? asset('profil/'.$user->profil_photo)
                : "https://ui-avatars.com/api/?name=".urlencode($user->name)."&background=198754&color=fff";
          @endphp

          <img src="{{ $foto }}" class="rounded-circle me-2" width="40" height="40" style="object-fit: cover;">

          <div>
            <strong>{{ $album->user->name }}</strong><br>
            <small class="text-muted">{{ $album->created_at->diffForHumans() }}</small>
          </div>
        </div>

        @auth
          @if(Auth::user()->role === 'admin' || Auth::id() === $album->user_id)
          <div class="dropdown">
            <button class="btn btn-sm bg-transparent border-0 p-0" data-bs-toggle="dropdown">
              <img src="{{ asset('images/titik3.png') }}" class="titik3-icon">
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="{{ route('album.edit', $album->id) }}" class="dropdown-item"><i class="bi bi-pencil-square me-2 text-success"></i>Edit</a></li>
              <li>
                <form action="{{ route('album.destroy', $album->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus postingan ini?')">
                  @csrf @method('DELETE')
                  <button type="submit" class="dropdown-item text-danger"><i class="bi bi-trash me-2"></i>Hapus</button>
                </form>
              </li>
            </ul>
          </div>
          @endif
        @endauth
      </div>

      <p class="mb-3">{{ $album->caption }}</p>

      <!-- MEDIA -->
      @if($album->media)
        @if(Str::endsWith($album->media, ['.jpg', '.jpeg', '.png']))
          <img src="{{ asset('storage/'.$album->media) }}" class="img-fluid rounded w-100 mb-2">
        @elseif(Str::endsWith($album->media, ['.mp4', '.mov', '.avi']))
          <video controls class="w-100 rounded mb-2">
            <source src="{{ asset('storage/'.$album->media) }}">
          </video>
        @endif
      @endif

      <!-- LIKE & COMMENT -->
      <div class="d-flex align-items-center mb-3">
        @auth
        <button class="like-btn me-2" data-id="{{ $album->id }}">
          <img src="{{ asset('images/' . ($album->likes->where('user_id', Auth::id())->count() ? 'like-active.png' : 'like.png')) }}" 
               width="34" class="like-icon">
        </button>
        @endauth

        <span id="like-count-{{ $album->id }}">{{ $album->likes->count() }}</span>&nbsp;Suka

        <div class="d-flex align-items-center ms-4">
          <button class="comment-btn me-2" data-id="{{ $album->id }}">
            <img src="{{ asset('images/komentar.png') }}" width="34" class="comment-icon">
          </button>
          <span id="comment-count-{{ $album->id }}">{{ $album->comments->count() }}</span>&nbsp;Komentar
        </div>
      </div>


      <!-- KOMENTAR -->
      <div class="border-top pt-3">

        @foreach ($album->comments as $comment)
        <div class="mb-3" data-comment-id="{{ $comment->id }}">
          <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex">

              @php
                $u = $comment->user;
                $foto = $u->profil_photo
                    ? asset('profil/'.$u->profil_photo)
                    : "https://ui-avatars.com/api/?name=".urlencode($u->name)."&background=0d6efd&color=fff";
              @endphp

              <img src="{{ $foto }}" class="rounded-circle me-2" width="35" height="35" style="object-fit: cover;">

              <div class="flex-grow-1">
                <div class="bg-light p-2 rounded comment-content">
                  <strong>{{ $comment->user->name }}</strong>
                  <p class="mb-1">{{ $comment->content }}</p>
                  <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </div>

                <!-- REPLY -->
                @foreach ($comment->replies as $reply)

                @php
                  $ru = $reply->user;
                  $fotoReply = $ru->profil_photo
                      ? asset('profil/'.$ru->profil_photo)
                      : "https://ui-avatars.com/api/?name=".urlencode($ru->name)."&background=6c757d&color=fff";
                @endphp

                <div class="d-flex align-items-start justify-content-between mt-2 ms-4" data-comment-id="{{ $reply->id }}">
                  <div class="d-flex">

                    <img src="{{ $fotoReply }}" class="rounded-circle me-2" width="30" height="30" style="object-fit: cover;">

                    <div class="bg-white p-2 rounded border comment-content">
                      <strong>{{ $reply->user->name }}</strong>
                      <p class="mb-1">{{ $reply->content }}</p>
                      <small class="text-muted">{{ $reply->created_at->diffForHumans() }}</small>
                    </div>
                  </div>

                  @auth
                    @if(Auth::user()->role === 'admin' || Auth::id() === $reply->user_id)
                    <div class="dropdown">
                      <button class="btn btn-sm bg-transparent border-0 p-0" data-bs-toggle="dropdown">
                        <img src="{{ asset('images/titik3.png') }}" class="titik3-icon">
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item text-success edit-comment-btn"><i class="bi bi-pencil-square me-2"></i>Edit</button></li>
                        <li>
                          <form action="{{ route('comments.destroy', $reply->id) }}" method="POST" class="delete-comment-form m-0">
                            @csrf @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger"><i class="bi bi-trash me-2"></i>Hapus</button>
                          </form>
                        </li>
                      </ul>
                    </div>
                    @endif
                  @endauth

                </div>
                @endforeach

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

            <!-- BUTTON EDIT DELETE COMMENT -->
            @auth
            @if(Auth::id() === $comment->user_id || Auth::user()->role === 'admin')
            <div class="dropdown">
              <button class="btn btn-sm bg-transparent border-0 p-0" data-bs-toggle="dropdown">
                <img src="{{ asset('images/titik3.png') }}" class="titik3-icon">
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><button class="dropdown-item text-success edit-comment-btn"><i class="bi bi-pencil-square me-2"></i>Edit</button></li>
                <li>
                  <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="delete-comment-form m-0">
                    @csrf @method('DELETE')
                    <button type="submit" class="dropdown-item text-danger"><i class="bi bi-trash me-2"></i>Hapus</button>
                  </form>
                </li>
              </ul>
            </div>
            @endif
            @endauth

          </div>
        </div>
        @endforeach

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
.like-btn,.comment-btn{border:none;background:transparent;cursor:pointer;transition:.15s}
.like-btn:hover,.comment-btn:hover{transform:scale(1.15)}
.titik3-icon{width:40px;height:40px;background:transparent;border:none;padding:0}
</style>

<script>
document.addEventListener("DOMContentLoaded",()=>{

// LIKE
document.querySelectorAll('.like-btn').forEach(btn=>{
  btn.addEventListener('click',async()=>{
    const id=btn.dataset.id;
    const res=await fetch(`/album/${id}/like`,{
      method:'POST',
      headers:{'X-CSRF-TOKEN':'{{ csrf_token() }}','Accept':'application/json'}
    });
    const data=await res.json();
    document.getElementById(`like-count-${id}`).textContent=data.likes;
    btn.querySelector('img').src=data.liked
      ? "{{ asset('images/like-active.png') }}"
      : "{{ asset('images/like.png') }}";
  });
});

// SCROLL
document.querySelectorAll('.comment-btn').forEach(btn=>{
  btn.addEventListener('click',()=>{
    const section=btn.closest('.card-body').querySelector('.border-top');
    if(section) section.scrollIntoView({behavior:'smooth'});
  });
});

document.addEventListener("submit",async e=>{
  const form=e.target;

  // KOMENTAR BARU
  if(form.classList.contains("comment-form")){
    e.preventDefault();
    const res=await fetch(form.action,{
      method:"POST",
      headers:{'X-CSRF-TOKEN':'{{ csrf_token() }}'},
      body:new FormData(form)
    });
    if(res.ok) location.reload();
  }

  // HAPUS KOMENTAR
  if(form.classList.contains("delete-comment-form")){
    e.preventDefault();
    if(!confirm('Yakin ingin menghapus komentar ini?')) return;
    const res=await fetch(form.action,{
      method:"DELETE",
      headers:{'X-CSRF-TOKEN':'{{ csrf_token() }}'}
    });
    if(res.ok) form.closest("[data-comment-id]").remove();
  }
});

// EDIT KOMENTAR
document.addEventListener("click",e=>{
  const btn=e.target.closest(".edit-comment-btn");
  if(!btn)return;

  const box=btn.closest("[data-comment-id]");
  const contentDiv=box.querySelector(".comment-content");
  const p=contentDiv.querySelector("p");
  const old=p.textContent.trim();

  contentDiv.innerHTML=`
    <form class="edit-comment-form">
      <input type="text" name="content" class="form-control form-control-sm" value="${old}">
      <div class="mt-2 d-flex gap-1">
        <button class="btn btn-success btn-sm">Simpan</button>
        <button type="button" class="btn btn-secondary btn-sm cancel-edit">Batal</button>
      </div>
    </form>
  `;
});

// BATAL EDIT
document.addEventListener("click",e=>{
  if(!e.target.classList.contains("cancel-edit")) return;
  const form=e.target.closest(".edit-comment-form");
  location.reload();
});

// SIMPAN EDIT
document.addEventListener("submit",async e=>{
  if(!e.target.classList.contains("edit-comment-form")) return;
  e.preventDefault();

  const form=e.target;
  const box=form.closest("[data-comment-id]");
  const id=box.dataset.commentId;
  const content=form.querySelector("input").value;

  const res=await fetch(`/comments/${id}`,{
    method:"PUT",
    headers:{
      "X-CSRF-TOKEN":"{{ csrf_token() }}",
      "Content-Type":"application/json",
      "Accept":"application/json"
    },
    body:JSON.stringify({content})
  });

  if(res.ok){
    location.reload();
  }
});

});
</script>

@endsection
