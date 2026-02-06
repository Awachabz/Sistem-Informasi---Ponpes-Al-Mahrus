<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'title'   => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'image'   => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('notif', 'public');
        }

        // KIRIM KE SEMUA USER LOGIN
        $users = User::pluck('id');

        foreach ($users as $userId) {
            Notification::create([
                'user_id' => $userId, 
                'title'   => $request->title,
                'message' => $request->message,
                'image'   => $imagePath,
                'is_read' => false,
            ]);
        }

        return back()->with('success', 'Notifikasi berhasil dikirim ke semua user.');
    }

    /**
     * ===============================
     * LIST NOTIFIKASI USER LOGIN
     * ===============================
     */
    public function list()
    {
        return Notification::where('user_id', Auth::id())
            ->latest()
            ->take(10)
            ->get();
    }

    /**
     * ===============================
     * HITUNG NOTIFIKASI USER
     * ===============================
     */
    public function count()
    {
        return response()->json([
            'count' => Notification::where('user_id', Auth::id())->count()
        ]);
    }

    /**
     * ===============================
     * FORM CREATE (ADMIN)
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
        Notification::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        return response()->json(['success' => true]);
    }

    /**
     * ===============================
     * HAPUS SEMUA NOTIFIKASI USER
     * ===============================
     */
    public function deleteAll()
    {
        Notification::where('user_id', Auth::id())->delete();

        return response()->json(['success' => true]);
    }
}
