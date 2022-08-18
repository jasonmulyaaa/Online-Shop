<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Contactus;

class ContactusUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfigurasi = Konfigurasi::all();
        $contactus = COntactus::all();

        return view('user.contact.index', compact('konfigurasi', 'contactus'));
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
            'nama' => 'required',
            'subjek' => 'required',
            'keterangan' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ],
        [
            'g-recaptcha-response.required' => 'Mohon diperiksa kembali apakah anda robot atau tidak!'
        ]
    );


        Contactus::create($validate);
        return redirect()->route('contact.index')->with('success', 'Saran Anda Berhasil Terkirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
