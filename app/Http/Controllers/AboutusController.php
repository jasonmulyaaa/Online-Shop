<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aboutuss = Aboutus::latest()->paginate(5);

        $aboutuss = Aboutus::when($request->search, function ($query) use ($request) {
            $query->where('kategori', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $aboutuss->appends($request->only('search'));

        return view('aboutus.index', compact('aboutuss'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file|required',

        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        Aboutus::create($validate);
        return redirect()->route('aboutus.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutus $aboutu)
    {
        return view('aboutus.edit', compact('aboutu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutus $aboutu)
    {
        $rules = ([
            'judul' => 'required',
            'gambar' => 'image|file',
            'deskripsi' => 'required',

        ]);

        $validate = $request->validate($rules);

        if ($request->file('gambar')) {
            $validate['gambar'] = $request->file('gambar')->store('post-images/slider');
        };


        $aboutu->update($validate);
        return redirect()->route('aboutus.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutus $aboutu)
    {
        $aboutu->delete();
        return redirect()->route('aboutus.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
