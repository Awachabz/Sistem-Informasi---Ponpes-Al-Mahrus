<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'album_id' => 'required|exists:albums,id',
            'content' => 'required|string|max:1000',
        ]);

        $comment = Comment::create([
            'album_id' => $request->album_id,
            'user_id' => Auth::id(),
            'parent_id' => $request->parent_id,
            'content' => $request->content,
        ]);

        // Jika request via AJAX, kembalikan data JSON
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'comment' => [
                    'id' => $comment->id,
                    'content' => e($comment->content),
                    'user' => Auth::user()->name,
                    'created_at' => $comment->created_at->diffForHumans(),
                    'parent_id' => $comment->parent_id,
                ]
            ]);
        }

        return back()->with('success', 'Komentar berhasil ditambahkan.');
    }

    public function destroy(Comment $comment)
    {
        if (Auth::id() !== $comment->user_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $comment->delete();
        return response()->json(['success' => true]);
    }

                public function update(Request $request, Comment $comment)
                   {
                      if (Auth::id() !== $comment->user_id && Auth::user()->role !== 'admin') {
                    abort(403);
                    }

                     $request->validate(['content' => 'required|string|max:1000']);
                     $comment->update(['content' => $request->content]);

                    return response()->json(['content' => $comment->content]);
                }
}
