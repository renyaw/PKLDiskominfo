<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\antreanDomModel;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

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
        try {
            $sp_kel = $request->file('sp_kel_dom');
            $ktp = $request->file('ktp_dom');
            $kk = $request->file('kk_dom');
            $lain = $request->file('lain_dom');
            $nama_sp = $sp_kel->getClientOriginalName();
            $nama_ktp = $ktp->getClientOriginalName();
            $nama_kk = $kk->getClientOriginalName();
            $nama_lain = $lain->getClientOriginalName();
            $extension_sp = $sp_kel->getClientOriginalExtension();
            $extension_ktp = $ktp->getClientOriginalExtension();
            $extension_kk = $kk->getClientOriginalExtension();
            $extension_lain = $lain->getClientOriginalExtension();
            $newNama_sp = $nama_sp.'.'.$extension_sp;
            $newNama_ktp = $nama_ktp.'.'.$extension_ktp;
            $newNama_kk = $nama_kk.'.'.$extension_kk;
            $newNama_lain = $nama_lain.'.'.$extension_lain;
            $path_sp = Storage::putFileAs('sp_kel_dom', $request->file('sp_kel_dom'), $newNama_sp);
            $path_ktp = Storage::putFileAs('ktp_dom', $request->file('ktp_dom'), $newNama_ktp);
            $path_kk = Storage::putFileAs('kk_dom', $request->file('kk_dom'), $newNama_kk);
            $path_lain = Storage::putFileAs('lain_dom', $request->file('lain_dom'), $newNama_lain);
            $data = [
                'sp_kel_dom' => $path_sp,
                'ktp_dom' => $path_ktp,
                'kk_dom' => $path_kk,
                'lain_dom' => $path_lain,
                // 'tgl_antre_dom' => '2023-02-01',
                'fk_id_user' => Auth::user()->id,
                'fk_status' => 1

            ];

            antreanDomModel::create($data);
            return redirect('/dashMasy')->with('berhasil', 'Berkas Berhasil diinput! Silahkan Cek Melalui Riwayat');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

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
