<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggle(Album $album)
    {
        $like = Like::where('album_id', $album->id)
                    ->where('user_id', Auth::id())
                    ->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            Like::create([
                'album_id' => $album->id,
                'user_id' => Auth::id(),
            ]);
            $liked = true;
        }

        return response()->json([
            'liked' => $liked,
            'likes' => $album->likes()->count(),
        ]);
    }
}
