@extends('layouts.app')

@section('content')
<div class="container py-4">

  <h4 class="fw-bold text-success mb-3">Al-Mahrus Chat's</h4>

  <!-- CHAT BOX -->
  <div id="chatBox"
       class="border rounded p-3 mb-3"
       style="height:420px; overflow-y:auto; background:#f7f7f7">
  </div>

  <!-- INPUT -->
  <div class="d-flex gap-2 position-relative">

    <!-- EMOJI BUTTON -->
    <button type="button" id="emojiBtn" class="btn btn-light">😊</button>

    <!-- EMOJI PICKER -->
    <div id="emojiPicker"
         style="position:absolute; bottom:55px; left:0; z-index:999; display:none;">
    </div>

    <input type="text" id="message" class="form-control" placeholder="Ketik pesan...">
    <button id="sendBtn" class="btn btn-success">Kirim</button>
  </div>

</div>
@endsection

@push('scripts')

<!-- EMOJI MART -->
<script src="https://cdn.jsdelivr.net/npm/emoji-mart@latest/dist/browser.js"></script>

<script>
const chatBox = document.getElementById('chatBox');
const messageInput = document.getElementById('message');
const sendBtn = document.getElementById('sendBtn');
const emojiBtn = document.getElementById('emojiBtn');
const emojiPicker = document.getElementById('emojiPicker');

const myUserId = {{ Auth::id() }};

// ================= HELPER =================

// CEK APAKAH USER DI BAWAH (WA STYLE)
function isUserAtBottom() {
    return chatBox.scrollTop + chatBox.clientHeight >= chatBox.scrollHeight - 20;
}

// FORMAT JAM
function formatTime(datetime) {
    const d = new Date(datetime);
    return d.toLocaleTimeString('id-ID', {
        hour: '2-digit',
        minute: '2-digit'
    });
}

// ================= RENDER CHAT =================
function render(chat) {

    const isMe = chat.user_id == myUserId;

    const photo = chat.user.profil_photo
        ? `/profil/${chat.user.profil_photo}`
        : `/images/default.png`;

    const time = formatTime(chat.created_at);
    const role = chat.user.role ?? '';

    const wrap = document.createElement('div');
    wrap.className = 'd-flex mb-3';
    wrap.style.justifyContent = isMe ? 'flex-end' : 'flex-start';

    wrap.innerHTML = `
      <div style="max-width:70%;">

        <div class="d-flex align-items-center mb-1 ${isMe ? 'flex-row-reverse' : ''}">
          <img src="${photo}"
               class="rounded-circle ${isMe ? 'ms-2' : 'me-2'}"
               width="35" height="35"
               style="object-fit:cover">

          <div class="d-flex flex-column ${isMe ? 'text-end' : 'text-start'}">
            <strong style="font-size:14px">${chat.user.name}</strong>
            <small class="text-muted" style="font-size:11px">${role}</small>
          </div>
        </div>

        <div class="p-2 rounded position-relative text-start
            ${isMe ? 'bg-success text-white' : 'bg-white border'}">

          ${chat.sticker
            ? `<img src="/stickers/${chat.sticker}" width="80">`
            : `<span>${chat.message}</span>`}

          <div class="small text-muted mt-1 text-end" style="font-size:11px">
            ${time}
          </div>
        </div>

      </div>
    `;

    chatBox.appendChild(wrap);
}

// ================= LOAD CHAT (FIX SCROLL) =================
function loadChat() {

    const shouldScroll = isUserAtBottom();

    fetch('/chat-fetch')
      .then(res => res.json())
      .then(data => {

          chatBox.innerHTML = '';
          data.forEach(render);

          // AUTO SCROLL HANYA JIKA USER DI BAWAH
          if (shouldScroll) {
              chatBox.scrollTop = chatBox.scrollHeight;
          }
      });
}

// ================= KIRIM PESAN =================
sendBtn.addEventListener('click', () => {
    if (!messageInput.value.trim()) return;

    fetch('/chat-send', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            message: messageInput.value
        })
    }).then(() => {
        messageInput.value = '';
        loadChat();
    });
});

// ENTER = KIRIM
messageInput.addEventListener('keypress', e => {
    if (e.key === 'Enter') sendBtn.click();
});

// ================= EMOJI =================
const picker = new EmojiMart.Picker({
    locale: 'id',
    theme: 'light',
    previewPosition: 'none',
    onEmojiSelect: (emoji) => {
        messageInput.value += emoji.native;
        messageInput.focus();
    }
});

emojiPicker.appendChild(picker);

emojiBtn.addEventListener('click', () => {
    emojiPicker.style.display =
        emojiPicker.style.display === 'none' ? 'block' : 'none';
});

document.addEventListener('click', e => {
    if (!emojiBtn.contains(e.target) && !emojiPicker.contains(e.target)) {
        emojiPicker.style.display = 'none';
    }
});

// ================= INIT =================
loadChat();
setInterval(loadChat, 3000);
</script>
@endpush
