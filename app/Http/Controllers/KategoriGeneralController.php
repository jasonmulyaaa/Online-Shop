<?php

namespace App\Http\Controllers;

use App\Models\Kategorigeneral;
use Illuminate\Http\Request;

class KategoriGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategorigenerals = Kategorigeneral::latest()->paginate(5);

        $kategorigenerals = Kategorigeneral::when($request->search, function ($query) use ($request) {
            $query->where('kategorigeneral', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $kategorigenerals->appends($request->only('search'));

        return view('kategorigeneral.index', compact('kategorigenerals'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'kategorigeneral' => 'required',
            'icon' => 'image|file|required',
        ]);

        $image = $request->file('icon')->store('post-images/slider');

        $validate['icon'] = $image;

        Kategorigeneral::create($validate);
        return redirect()->route('kategorigeneral.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategorigeneral  $kategorigeneral
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorigeneral $kategorigeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorigeneral  $kategorigeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorigeneral $kategorigeneral)
    {
        return view('kategorigeneral.edit', compact('kategorigeneral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategorigeneral  $kategorigeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorigeneral $kategorigeneral)
    {
        $rules = ([
            'kategorigeneral' => 'required',
            'icon' => 'image|file|',
        ]);

        $validate = $request->validate($rules);
        
        if ($request->file('icon')) {
            $validate['icon'] = $request->file('icon')->store('post-images/slider');
        };

        $kategorigeneral->update($validate);
        return redirect()->route('kategorigeneral.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorigeneral  $kategorigeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorigeneral $kategorigeneral)
    {
        $kategorigeneral->delete();
        return redirect()->route('kategorigeneral.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedKategoriGeneral(Request $request)
    {
        $ids = $request->ids;
        Kategorigeneral::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
