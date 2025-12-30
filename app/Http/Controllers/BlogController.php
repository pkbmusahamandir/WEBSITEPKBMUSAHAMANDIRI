<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }
    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,webp',
            'desc'  => 'required|min:20',
        ]);
        $slug = Str::slug($request->judul);
        $originalSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
        $image = $request->file('image');
        $randName = time(); 
        $extension = $image->getClientOriginalExtension();
        $filename = "{$randName}.{$extension}";

        $path = $image->storeAs('artikel', $filename, 'public');

        $blog = new Blog();
        $blog->judul = $request->judul;
        $blog->desc = $request->desc;
        $blog->slug=$slug;
        $blog->image = $path;
        $blog->save();

         return redirect()->route('blog')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'desc'  => 'required|min:20',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp',
        ]);

        $artikel = Blog::findOrFail($id);
        $slug = Str::slug($request->judul);
        $originalSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $artikel->judul = $request->judul;
        $artikel->desc = $request->desc;
        $artikel->slug = $slug;
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($artikel->image);
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('artikel', $filename, 'public');

            $artikel->image = $path;
        }

        $artikel->save();

        return redirect()->route('blog')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('blog')->with('success', 'Data berhasil dihapus');
    }

}
