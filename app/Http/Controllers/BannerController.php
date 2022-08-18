<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banners = Banner::latest()->paginate(5);

        $banners = Banner::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $banners->appends($request->only('search'));

        return view('banner.index', compact('banners'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        Banner::create($validate);
        return redirect()->route('banner.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
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

        $banner->update($validate);
        return redirect()->route('banner.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedBanner(Request $request)
    {
        $ids = $request->ids;
        Banner::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
