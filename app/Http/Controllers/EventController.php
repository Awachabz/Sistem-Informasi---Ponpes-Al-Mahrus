<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // =====================
    // HALAMAN ACARA (PUBLIC + ADMIN)
    // =====================
    public function index()
    {
        $events = Event::orderBy('event_time', 'asc')->get();
        return view('event.index', compact('events'));
    }

    // =====================
    // ADMIN → ALIHKAN KE INDEX
    // =====================
    public function admin()
    {
        return redirect()->route('event.index');
    }

    // =====================
    // FORM TAMBAH ACARA
    // =====================
    public function create()
    {
        return view('event.create');
    }

    // =====================
    // SIMPAN ACARA
    // =====================
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'event_time'  => 'required|date',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
        }

        Event::create([
            'title'       => $request->title,
            'description' => $request->description,
            'event_time'  => $request->event_time,
            'image'       => $imagePath,
        ]);

        return redirect()->route('event.index')->with('success', 'Acara berhasil ditambahkan');
    }
// =====================
// FORM EDIT ACARA
// =====================
public function edit($id)
{
    $event = Event::findOrFail($id);
    return view('event.edit', compact('event'));
}

// =====================
// UPDATE ACARA
// =====================
public function update(Request $request, $id)
{
    $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required',
        'event_time'  => 'required|date',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $event = Event::findOrFail($id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('events', 'public');
        $event->image = $imagePath;
    }

    $event->update([
        'title'       => $request->title,
        'description' => $request->description,
        'event_time'  => $request->event_time,
        'image'       => $event->image,
    ]);

    return redirect()->route('event.index')
        ->with('success', 'Acara berhasil diperbarui');
}

    // =====================
    // HAPUS ACARA
    // =====================
    public function destroy($id)
    {
        Event::destroy($id);
        return back()->with('success', 'Acara berhasil dihapus');
    }
}
