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
        // Public (belum login / role public) hanya lihat postingan publik
        if (!Auth::check() || Auth::user()->role === 'public') {
            $albums = Album::where('privacy', 'public')
                ->with('user')
                ->latest()
                ->get();
        } else {
            // Admin & user bisa lihat semua posting
            $albums = Album::with('user')->latest()->get();
        }

        return view('album.album', compact('albums'));
    }

    // ===============================
    //  TAMBAH POSTINGAN
    // ===============================
    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required|string|max:500',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20480',
            'privacy' => 'required|in:public,private'
        ]);

        $path = null;
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('albums', 'public');
        }

        // Tentukan jenis media
        $mediaType = 'none';
        if ($request->hasFile('media')) {
            $ext = $request->file('media')->extension();
            $mediaType = in_array($ext, ['jpg','jpeg','png']) ? 'image' : 'video';
        }

        Album::create([
            'user_id' => Auth::id(),
            'caption' => $request->caption,
            'media' => $path,
            'media_type' => $mediaType,
            'privacy' => $request->privacy
        ]);

        return back()->with('success', 'Postingan berhasil ditambahkan.');
    }

    // ===============================
    //  EDIT POSTINGAN
    // ===============================
    public function edit($id)
    {
        $album = Album::findOrFail($id);

        if (auth()->user()->role !== 'admin' && auth()->id() !== $album->user_id) {
            abort(403, 'Tidak diizinkan mengedit postingan ini.');
        }

        return view('album.edit', compact('album'));
    }

    // ===============================
    //  UPDATE POSTINGAN
    // ===============================
    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);

        if (auth()->user()->role !== 'admin' && auth()->id() !== $album->user_id) {
            abort(403, 'Tidak diizinkan mengedit postingan ini.');
        }

        $request->validate([
            'caption' => 'required',
            'privacy' => 'required|in:public,private'
        ]);

        $album->caption = $request->caption;
        $album->privacy = $request->privacy;

        if ($request->hasFile('media')) {
            if ($album->media && Storage::disk('public')->exists($album->media)) {
                Storage::disk('public')->delete($album->media);
            }

            $album->media = $request->file('media')->store('albums', 'public');

            // Update tipe media
            $ext = $request->file('media')->extension();
            $album->media_type = in_array($ext, ['jpg','jpeg','png']) ? 'image' : 'video';
        }

        $album->save();

        return redirect()->route('album.index')->with('success', 'Postingan berhasil diperbarui.');
    }

    // ===============================
    //  HAPUS POSTINGAN
    // ===============================
    public function destroy($id)
    {
        $album = Album::findOrFail($id);

        if (auth()->user()->role !== 'admin' && auth()->id() !== $album->user_id) {
            abort(403, 'Tidak diizinkan menghapus postingan ini.');
        }

        if ($album->media && Storage::disk('public')->exists($album->media)) {
            Storage::disk('public')->delete($album->media);
        }

        $album->delete();

        return back()->with('success', 'Postingan berhasil dihapus.');
    }
}
