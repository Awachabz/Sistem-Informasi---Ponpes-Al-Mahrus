<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    // ===============================
    //  TAMPILKAN POSTINGAN
    // ===============================
    public function index()
    {
        $albums = Album::with([
            'user',
            'likes',
            'comments.replies'
        ])->latest()->get();

        return view('album.album', compact('albums'));
    }

    // ===============================
    //  DETAIL POSTINGAN
    // ===============================
    public function show(Album $album)
    {
        $album->load([
            'user',
            'likes',
            'comments.replies'
        ]);

        return view('album.show', compact('album'));
    }

    // ===============================
    //  TAMBAH POSTINGAN
    // ===============================
    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required|string|max:500',
            'media'   => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20480',
        ]);

        $path = null;
        $mediaType = 'none';

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('albums', 'public');
            $ext = $request->file('media')->extension();
            $mediaType = in_array($ext, ['jpg','jpeg','png']) ? 'image' : 'video';
        }

        Album::create([
            'user_id'    => Auth::id(),
            'caption'    => $request->caption,
            'media'      => $path,
            'media_type' => $mediaType,
        ]);

        return back()->with('success', 'Postingan berhasil ditambahkan.');
    }

    // ===============================
    //  EDIT POSTINGAN
    // ===============================
    public function edit($id)
    {
        $album = Album::findOrFail($id);

        if (Auth::user()->role !== 'admin' && Auth::id() !== $album->user_id) {
            abort(403);
        }

        return view('album.edit', compact('album'));
    }

    // ===============================
    //  UPDATE POSTINGAN
    // ===============================
    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);

        if (Auth::user()->role !== 'admin' && Auth::id() !== $album->user_id) {
            abort(403);
        }

        $request->validate([
            'caption' => 'required|string|max:500',
            'media'   => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20480',
        ]);

        $album->caption = $request->caption;

        if ($request->hasFile('media')) {
            if ($album->media && Storage::disk('public')->exists($album->media)) {
                Storage::disk('public')->delete($album->media);
            }

            $album->media = $request->file('media')->store('albums', 'public');
            $ext = $request->file('media')->extension();
            $album->media_type = in_array($ext, ['jpg','jpeg','png']) ? 'image' : 'video';
        }

        $album->save();

        return redirect()->route('album.index')
            ->with('success', 'Postingan berhasil diperbarui.');
    }

    // ===============================
    //  HAPUS POSTINGAN
    // ===============================
    public function destroy($id)
    {
        $album = Album::findOrFail($id);

        if (Auth::user()->role !== 'admin' && Auth::id() !== $album->user_id) {
            abort(403);
        }

        if ($album->media && Storage::disk('public')->exists($album->media)) {
            Storage::disk('public')->delete($album->media);
        }

        $album->delete();

        return back()->with('danger', 'Postingan berhasil dihapus.');
    }
}
