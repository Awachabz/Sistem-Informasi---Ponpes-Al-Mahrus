<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::with('user')
            ->orderBy('created_at', 'asc')
            ->get();

        return view('chat.index', compact('chats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'nullable|string',
            'sticker' => 'nullable|string',
        ]);

        Chat::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'sticker' => $request->sticker,
        ]);

        return response()->json(['success' => true]);
    }

    public function fetch()
    {
        return Chat::with('user')
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
