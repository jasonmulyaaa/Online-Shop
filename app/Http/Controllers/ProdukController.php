<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategorigeneral;
use App\Models\Slider;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produks = Produk::latest()->paginate(5);
        $kategorigeneral = Kategorigeneral::all();

        $produks = Produk::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $produks->appends($request->only('search'));

        if (request()->filter) {
            $filter = request()->filter;
            $produk = Produk::where('kategorigeneral', '=', "{$filter}")->orderBy('created_at', 'desc')->get();
        } else {
            $data = Produk::latest()->get();
        }

        return view('produk.index', compact('produks', 'kategorigeneral'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategorigeneral' => 'required',
            'gambar1' => 'image|file|required',
            'gambar2' => 'image|file|',
            'gambar3' => 'image|file|',
            'gambar4' => 'image|file|',
            'views' => 'required',
            'slider',
            'promo',

        ]);

        $image1 = $request->file('gambar1')->store('post-images/slider');

        $validate['gambar1'] = $image1;
        
        if ($request->file('gambar2') == NULL) {
            
            $image2 = $request->file('gambar2') == NULL;
        }
        else{
            $image2 = $request->file('gambar2')->store('post-images/slider');
        };
        

        if ($request->file('gambar3') == NULL) {
            
            $image3 = $request->file('gambar3') == NULL;
        }
        else{
            $image3 = $request->file('gambar3')->store('post-images/slider');
        };

        if ($request->file('gambar4') == NULL) {
            
            $image4 = $request->file('gambar4') == NULL;
        }
        else{
            $image4 = $request->file('gambar4')->store('post-images/slider');
        };


        $validate['gambar2'] = $image2;

        $validate['gambar3'] = $image3;

        $validate['gambar4'] = $image4;

        if ($request->has('slider')) {
            $validate['slider'] = true;
        };

        if ($request->has('promo')) {
            $validate['promo'] = true;
        };

        if ($request->has('diskon')) {
            $validate['diskon'] = true;
        };


        Produk::create($validate);
        return redirect()->route('produk.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $kategorigeneral = Kategorigeneral::all();
        return view('produk.edit', compact('produk', 'kategorigeneral'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk, Slider $slider)
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

        if ('oldslider = slider') {
            $validate['slider'] = '';
        };

        if ($request->has('slider')) {
            $validate['slider'] = true;
        };

        if ('oldslider = promo') {
            $validate['promo'] = '';
        };

        if ($request->has('promo')) {
            $validate['promo'] = true;
        };

        if ($request->has('diskon')) {
            $validate['diskon'] = true;
        };

        $produk->update($validate);
        return redirect()->route('produk.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedProduk(Request $request)
    {
        $ids = $request->ids;
        Produk::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
