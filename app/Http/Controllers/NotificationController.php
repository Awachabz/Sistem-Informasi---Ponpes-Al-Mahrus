<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    /**
     * ===============================
     * ADMIN MEMBUAT NOTIFIKASI
     * ===============================
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'nullable|string',
            'message' => 'nullable|string',
            'image'   => 'nullable|image|max:2048',
        ]);

        // upload gambar (jika ada)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('notif', 'public');
        }

        // kirim ke semua user
        $users = User::all();

        foreach ($users as $user) {
            Notification::create([
                'user_id' => $user->id,
                'title'   => $request->title ?? '',
                'message' => $request->message ?? '',
                'image'   => $imagePath,
            ]);
        }

        return back()->with('success', 'Notifikasi berhasil dikirim ke semua pengguna.');
    }

    /**
     * ===============================
     * LIST NOTIFIKASI (BELL)
     * ===============================
     */
    public function list()
    {
        $notifications = Notification::latest()
            ->take(10)
            ->get();

        return response()->json($notifications);
    }

    /**
     * ===============================
     * HITUNG JUMLAH NOTIFIKASI
     * ===============================
     */
    public function count()
    {
        return response()->json([
            'count' => Notification::count()
        ]);
    }

    /**
     * ===============================
     * FORM CREATE NOTIFIKASI (ADMIN)
     * ===============================
     */
    public function create()
    {
        return view('admin.notif-create');
    }

    /**
     * ===============================
     * HAPUS SATU NOTIFIKASI
     * ===============================
     */
    public function destroy($id)
    {
        $notif = Notification::findOrFail($id);

        // hapus file gambar jika ada
        if ($notif->image && Storage::disk('public')->exists($notif->image)) {
            Storage::disk('public')->delete($notif->image);
        }

        $notif->delete();

        return response()->json(['success' => true]);
    }

    /**
     * ===============================
     * HAPUS SEMUA NOTIFIKASI
     * ===============================
     */
    public function deleteAll()
    {
        $notifications = Notification::all();

        foreach ($notifications as $notif) {
            if ($notif->image && Storage::disk('public')->exists($notif->image)) {
                Storage::disk('public')->delete($notif->image);
            }
        }

        Notification::truncate();

        return response()->json(['success' => true]);
    }
}
