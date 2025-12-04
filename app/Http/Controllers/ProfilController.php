<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfilController extends Controller
{
    /**
     * Halaman profil (default).
     * Jika ingin dipisah, gunakan adminProfile / userProfile.
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Halaman Profil Admin.
     */
    public function adminProfile()
    {
        return view('admin.profil');   // file: resources/views/admin/profil.blade.php
    }

    /**
     * Halaman Profil User.
     */
    public function userProfile()
    {
        return view('user.profil');    // file: resources/views/user/profil.blade.php
    }

    /**
     * Update nama pengguna.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name'  => ['required', 'string', 'max:255'],
        ]);

        $user = $request->user();
        $user->name  = $request->name;
        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Update password.
     */
    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:6', 'confirmed'],
        ]);

        if (!Hash::check($request->current_password, $request->user()->password)) {
            return back()->with('error', 'Password lama tidak sesuai.');
        }

        $request->user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password berhasil diubah.');
    }

    /**
     * Update foto profil.
     */
    public function updatePhoto(Request $request): RedirectResponse
    {
        $request->validate([
            'photo' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
        ]);

        $user = $request->user();

        // Hapus foto lama jika ada
        if ($user->profil_photo && file_exists(public_path('profil/' . $user->profil_photo))) {
            unlink(public_path('profil/' . $user->profil_photo));
        }

        // Upload foto baru
        $filename = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('profil'), $filename);

        // Simpan ke database
        $user->profil_photo = $filename;
        $user->save();

        return back()->with('success', 'Foto profil berhasil diperbarui.');
    }

    /**
     * Hapus akun.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
