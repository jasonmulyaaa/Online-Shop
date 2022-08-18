<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfigurasis = Konfigurasi::all();
        return view('konfigurasi.index', compact('konfigurasis'));
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
            'title' => 'required',
            'favicon' => 'image|file|required',
            'metadata' => 'required',
            'logo_header' => 'image|file|required',
            'logo_footer' => 'image|file|required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ]);

        $image = $request->file('favicon')->store('post-images/slider');

        $image1 = $request->file('logo_header')->store('post-images/slider');

        $image2 = $request->file('logo_footer')->store('post-images/slider');


        $validate['favicon'] = $image;

        $validate['logo_header'] = $image1;

        $validate['logo_footer'] = $image2;

        Konfigurasi::create($validate);
        return redirect()->route('konfigurasi.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konfigurasi $konfigurasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konfigurasi $konfigurasi)
    {
        return view('konfigurasi.edit', compact('konfigurasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konfigurasi $konfigurasi)
    {
        $rules = ([
            'title' => 'required',
            'favicon' => 'image|file',
            'metadata' => 'required',
            'logo_header' => 'image|file',
            'logo_footer' => 'image|file',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ]);
        $validate = $request->validate($rules);

        if ($request->file('favicon')) {
            $validate['favicon'] = $request->file('favicon')->store('post-images/slider');
        };

        if ($request->file('logo_header')) {
            $validate['logo_header'] = $request->file('logo_header')->store('post-images/slider');
        };

        if ($request->file('logo_footer')) {
            $validate['logo_footer'] = $request->file('logo_footer')->store('post-images/slider');
        };

        $konfigurasi->update($validate);
        return redirect()->route('konfigurasi.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konfigurasi  $konfigurasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konfigurasi $konfigurasi)
    {
        //
    }
}
