<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 🔹 Daftar semua user (aktif & pending)
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users', compact('users'));
    }

    /**
     * 🔹 Daftar user dengan status pending
     */
    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->orderBy('created_at', 'desc')->get();
        return view('admin.pending-users', compact('users'));
    }

    /**
     * 🔹 Setujui user (ubah status dari pending ke active)
     */
    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        return redirect()->route('admin.pending')->with('success', 'User berhasil diaktifkan.');
    }

    /**
     * 🔹 Hapus user
     */
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'User berhasil dihapus.');
    }
}
