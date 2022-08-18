<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Service::latest()->paginate(5);

        $services = Service::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(5);

        $services->appends($request->only('search'));

        return view('service.index', compact('services'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'deskripsi' => 'required'
        ]);

        $image = $request->file('gambar')->store('post-images/slider');

        $validate['gambar'] = $image;

        Service::create($validate);
        return redirect()->route('service.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
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

        $service->update($validate);
        return redirect()->route('service.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Berhasil Menghapus Data!');
    }

    public function deleteCheckedService(Request $request)
    {
        $ids = $request->ids;
        Service::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
