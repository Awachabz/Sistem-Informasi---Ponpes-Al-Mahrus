@extends('layouts.app')

@section('content')
<div class="container py-4">

    {{-- HEADER USER --}}
    <div class="d-flex align-items-center mb-3 border-bottom pb-2">
        <img src="{{ $user->profil_photo
                ? asset('storage/profile/'.$user->profil_photo)
                : asset('images/default-user.png') }}"
             class="rounded-circle me-3"
             width="45" height="45">

        <strong>{{ $user->name }}</strong>
    </div>

    {{-- CHAT BOX --}}
    <div id="chatBox"
         class="border rounded p-3 mb-3"
         style="height:400px; overflow-y:auto; background:#f7f7f7">

        @foreach($chats as $chat)
            <div class="mb-2 {{ $chat->from_user_id == auth()->id() ? 'text-end' : 'text-start' }}">

                @if($chat->sticker)
                    <img src="{{ asset('stickers/'.$chat->sticker) }}" width="80">
                @else
                    <span class="badge {{ $chat->from_user_id == auth()->id() ? 'bg-success' : 'bg-secondary' }}">
                        {{ $chat->message }}
                    </span>
                @endif

            </div>
        @endforeach

    </div>

    {{-- INPUT --}}
    <div class="d-flex gap-2">
        <input type="text"
               id="message"
               class="form-control"
               placeholder="Ketik pesan...">

        <button id="sendBtn" class="btn btn-success">Kirim</button>
    </div>

    {{-- STICKER --}}
    <div class="mt-2">
        <img src="{{ asset('stickers/love.webp') }}"
             width="40"
             style="cursor:pointer"
             onclick="sendSticker('love.webp')">

        <img src="{{ asset('stickers/laugh.webp') }}"
             width="40"
             style="cursor:pointer"
             onclick="sendSticker('laugh.webp')">
    </div>

</div>
@endsection

@push('scripts')
<script>
const chatBox = document.getElementById('chatBox');
const messageInput = document.getElementById('message');

function sendMessage() {
    if (!messageInput.value.trim()) return;

    fetch('{{ route("chat.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            to_user_id: {{ $user->id }},
            message: messageInput.value
        })
    }).then(() => location.reload());

    messageInput.value = '';
}

function sendSticker(name) {
    fetch('{{ route("chat.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            to_user_id: {{ $user->id }},
            sticker: name
        })
    }).then(() => location.reload());
}

document.getElementById('sendBtn').onclick = sendMessage;
</script>
@endpush
