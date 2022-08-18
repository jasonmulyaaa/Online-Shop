<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Produk;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $sliders = Produk::latest()->paginate(5);

        $sliders = Produk::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $sliders->appends($request->only('search'));

        return view('slider.index', compact('sliders'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        Slider::create($validate);
        return redirect()->route('slider.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $slider)
    {
        return view('slider.edit', compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $slider)
    {
        $rules = ([
            'judul' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategorigeneral' => 'required',
            'gambar1' => 'image|file|',
            'gambar2' => 'image|file|',
            'gambar3' => 'image|file|',
            'gambar4' => 'image|file|',
            'views',
            'slider',

        ]);

        $validate = $request->validate($rules);

        if ($request->file('gambar1')) {
            $validate['gambar1'] = $request->file('gambar1')->store('post-images/slider');
        };

        if ($request->file('gambar2')) {
            $validate['gambar2'] = $request->file('gambar2')->store('post-images/slider');
        };

        if ($request->file('gambar3')) {
            $validate['gambar3'] = $request->file('gambar3')->store('post-images/slider');
        };

        if ($request->file('gambar4')) {
            $validate['gambar4'] = $request->file('gambar4')->store('post-images/slider');
        };

        if ($request->has('slider')) {
            $validate['slider'] = false;
        }

        $slider->update($validate);
        return redirect()->route('slider.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedSlider(Request $request)
    {
        $ids = $request->ids;
        Slider::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
