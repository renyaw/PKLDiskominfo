<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\antreanDomModel;

class formDomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masyarakat/formDom');
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
        $berkas = $request->store([]);

        $sp_kel_dom = $request->file('sp_kel_dom')->store('sp_kel_dom');
        $ktp_dom = $request->file('ktp_dom')->store('ktp_dom');
        $kk_dom = $request->file('kk_dom')->store('kk_dom');
        $lain_dom = $request->file('lain_dom')->store('lain_dom');

        $request->antreanDomModel()->store([
            'sp_kel_dom' => $sp_kel_dom,
            'kk_dom' => $kk_dom,
            'ktp_dom' => $ktp_dom,
            'lain_dom' => $lain_dom
        ]);

        return redirect('/dashMasy')->with('berhasil', 'Berkas Berhasil diinput! Silahkan Cek Melalui Riwayat');
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
