<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

   public function index()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}


    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.pending-users', compact('users'));
    }

    public function approveUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'active';
        $user->save();

        return back()->with('success', 'User berhasil diaktifkan.');
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', 'User berhasil dihapus.');
    }
}
