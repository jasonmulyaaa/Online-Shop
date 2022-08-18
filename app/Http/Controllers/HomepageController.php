<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\Preorder;
use App\Models\Kategori;
use App\Models\Kategorigeneral;
use App\Models\Produk;
use App\Models\Iklan;
use App\Models\Service;
use App\Models\Konfigurasi;
use App\Models\Meta;

class HomepageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    $slider = Produk::all();
    $banner = Banner::all();
    $preorder = Preorder::all();
    $kategori = Kategori::all();
    $kategorigeneral = Kategorigeneral::all();
    $produk = Produk::all();
    $iklan = Iklan::all();
    $service = Service::all();
    $konfigurasi = Konfigurasi::all();
    $metamanagement = Meta::all();

    $produk = Produk::when($request->search, function ($query) use ($request) {
        $query->where('judul', 'like', "%{$request->search}%");;
    })->orderBy('created_at', 'desc')->paginate(6);

    $produk->appends($request->only('search'));
    
    $kategorigeneral1 = Kategorigeneral::all();

    $kategorigeneral2 = Kategorigeneral::all();

    $preorder1 = Preorder::all();

    $preorder2 = Preorder::all();

    $produks = Produk::orderBy('views', 'DESC')->get();

    $produks1 = Produk::orderBy('views', 'DESC')->get();

    $produks2 = Produk::orderBy('views', 'DESC')->limit(3)->get();

    $produks3 = Produk::orderBy('views', 'DESC')->limit(3)->get();

    $produks4 = Produk::orderBy('views', 'DESC')->limit(3)->get();

    $produks5 = Produk::orderBy('views', 'DESC')->limit(2)->get();

    $produks6 = Produk::all();


    return view('welcome', compact('slider', 'banner', 'preorder', 'kategori', 'kategorigeneral', 'produk', 'iklan', 'konfigurasi', 'service', 'produks', 'produks1', 'produks2', 'produks3', 'produks4', 'produks5', 'produks6', 'preorder1', 'preorder2', 'kategorigeneral1', 'kategorigeneral2', 'metamanagement'));

    }

    public function search()
    {
        $produk = Produk::all();

        $produk = Produk::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(6);

        $produk->appends($request->only('search'));

        return view('user.produks.index', compact('produk'));

    }

}
