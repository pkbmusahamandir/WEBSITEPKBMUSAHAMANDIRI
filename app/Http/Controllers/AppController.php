<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\Video;
use App\Models\ModulA;
use App\Models\ModulC;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::latest()->limit(3)->get(),
            'videos'   => Video::latest()->limit(3)->get(),
            'photos'   => Photo::latest()->limit(4)->get(),
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikels' => Blog::latest()->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->firstOrFail();

        return view('berita.detail', compact('artikel'));
    }

    // === Modul Paket C ===
    public function modulC()
    {
        $moduls = ModulC::orderBy('kelas')->get();
        return view('modulC.modulc', compact('moduls'));
    }

    // === Modul Paket A ===
    public function modulA()
    {
        $moduls = ModulA::orderBy('kelas')->get();
        return view('modulA.modula', compact('moduls'));
    }
}
