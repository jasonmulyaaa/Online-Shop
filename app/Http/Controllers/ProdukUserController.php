<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Konfigurasi;

class ProdukUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $konfigurasi = Konfigurasi::all();
        $produks = Produk::all();

        $produks = Produk::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%")->orWhere('kategorigeneral', 'like', "%{$request->search}");;
        })->orderBy('created_at', 'desc')->paginate(6);
    
        $produks->appends($request->only('search'));

        $produkss = Produk::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%")->orWhere('kategorigeneral', 'like', "%{$request->search}");;
        })->orderBy('created_at', 'desc')->count();

        return view('user.produks.index', compact('produks', 'konfigurasi', 'produkss'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $konfigurasi = Konfigurasi::all();

        $produks = Produk::all();

        $produk = Produk::where('judul', $id)->first();

        $produk->views += 1;

        $produk->update();
        return view('user.produks.show', compact('produk', 'konfigurasi', 'produks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
