<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StructureMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    /**
     * Menampilkan seluruh anggota struktur.
     */
    public function index()
    {
        // Ambil struktur dengan relasi anak
        $members = StructureMember::whereNull('parent_id')->get();

        // Ambil anak-anak per parent
        $children = StructureMember::whereNotNull('parent_id')->get()->groupBy('parent_id');

        return view('struktur.index', compact('members', 'children'));
    }

    /**
     * Menyimpan anggota struktur baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'division' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|integer',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('struktur', 'public');
        }

        StructureMember::create([
            'division' => $request->division,
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'photo' => $path,
        ]);

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Mengupdate data anggota struktur.
     */
    public function update(Request $request, $id)
    {
        $member = StructureMember::findOrFail($id);

        $request->validate([
            'division' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $path = $member->photo;

        if ($request->hasFile('photo')) {
            if ($path && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('photo')->store('struktur', 'public');
        }

        $member->update([
            'division' => $request->division,
            'name' => $request->name,
            'photo' => $path,
        ]);

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Menghapus anggota struktur.
     */
    public function destroy($id)
    {
        $member = StructureMember::findOrFail($id);

        if ($member->photo && Storage::disk('public')->exists($member->photo)) {
            Storage::disk('public')->delete($member->photo);
        }

        $member->delete();

        return back()->with('success', 'Data berhasil dihapus.');
    }
}
