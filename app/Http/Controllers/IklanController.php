<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklans = Iklan::latest()->paginate(5);

        return view('iklan.index', compact('iklans'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'gambar' => 'image|file|required',
            'judul' => 'required',
            'harga' => 'required'
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        Iklan::create($validate);
        return redirect()->route('iklan.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function show(Iklan $iklan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function edit(Iklan $iklan)
    {
        return view('iklan.edit', compact('iklan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iklan $iklan)
    {
        $rules = ([
            'judul' => 'required',
            'gambar' => 'image|file',
            'harga' => 'required',

        ]);

        $validate = $request->validate($rules);

        if ($request->file('gambar')) {
            $validate['gambar'] = $request->file('gambar')->store('post-images/slider');
        };

        $iklan->update($validate);
        return redirect()->route('iklan.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iklan $iklan)
    {
        //
    }
}
