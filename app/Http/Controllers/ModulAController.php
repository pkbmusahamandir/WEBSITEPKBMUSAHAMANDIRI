<?php

namespace App\Http\Controllers;

use App\Models\ModulA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModulAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $modul_as = ModulA::orderBy('kelas')->orderBy('judul')->get();
        return view('admin.modul_a.index', compact('modul_as'));
    }

    public function create()
    {
        return view('admin.modul_a.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'      => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'file'       => 'required|mimes:pdf,doc,docx', // ⬅ Tidak ada batas ukuran
            'kelas'      => 'required|in:4,5,6',
        ]);

        $path = $request->file('file')->store('modul_a', 'public');

        ModulA::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file'      => $path,
            'kelas'     => $request->kelas,
        ]);

        return redirect()->route('modul_a.index')->with('success', 'Modul berhasil ditambahkan.');
    }

    public function edit(ModulA $modul_a)
    {
        return view('admin.modul_a.edit', compact('modul_a'));
    }

    public function update(Request $request, ModulA $modul_a)
    {
        $request->validate([
            'judul'      => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'file'       => 'nullable|mimes:pdf,doc,docx', // ⬅ Tidak ada batas ukuran
            'kelas'      => 'required|in:4,5,6',
        ]);

        if ($request->hasFile('file')) {
            if ($modul_a->file && Storage::disk('public')->exists($modul_a->file)) {
                Storage::disk('public')->delete($modul_a->file);
            }

            $modul_a->file = $request->file('file')->store('modul_a', 'public');
        }

        $modul_a->judul = $request->judul;
        $modul_a->deskripsi = $request->deskripsi;
        $modul_a->kelas = $request->kelas;
        $modul_a->save();

        return redirect()->route('modul_a.index')->with('success', 'Modul berhasil diperbarui.');
    }

    public function destroy(ModulA $modul_a)
    {
        if ($modul_a->file && Storage::disk('public')->exists($modul_a->file)) {
            Storage::disk('public')->delete($modul_a->file);
        }

        $modul_a->delete();

        return redirect()->route('modul_a.index')->with('success', 'Modul berhasil dihapus.');
    }
}
