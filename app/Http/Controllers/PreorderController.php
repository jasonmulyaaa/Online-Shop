<?php

namespace App\Http\Controllers;

use App\Models\Preorder;
use Illuminate\Http\Request;

class PreorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $preorders = Preorder::latest()->paginate(5);

        $preorders = Preorder::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $preorders->appends($request->only('search'));

        return view('preorder.index', compact('preorders'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        Preorder::create($validate);
        return redirect()->route('preorder.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preorder  $preorder
     * @return \Illuminate\Http\Response
     */
    public function show(Preorder $preorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preorder  $preorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Preorder $preorder)
    {
        return view('preorder.edit', compact('preorder'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preorder  $preorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preorder $preorder)
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

        $preorder->update($validate);
        return redirect()->route('preorder.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preorder  $preorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preorder $preorder)
    {
        $preorder->delete();
        return redirect()->route('preorder.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedPreorder(Request $request)
    {
        $ids = $request->ids;
        Preorder::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
