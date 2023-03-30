<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\antreanDomModel;
use App\Models\userModel;

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
        $query = userModel::find(Auth::user()->id);
        return view('masyarakat/formDom',compact('query'));
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
            // penamaan file
            $newNama_sp = "SP_KEL-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_sp;
            $newNama_ktp = "KTP-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_ktp;
            $newNama_kk = "KK-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_kk;
            $newNama_lain = "Lain-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_lain;
            // untuk simpan filenya di storage
            $path_sp = Storage::putFileAs('public/sp_kel_dom', $request->file('sp_kel_dom'), $newNama_sp);
            $path_ktp = Storage::putFileAs('public/ktp_dom', $request->file('ktp_dom'), $newNama_ktp);
            $path_kk = Storage::putFileAs('public/kk_dom', $request->file('kk_dom'), $newNama_kk);
            $path_lain = Storage::putFileAs('public/lain_dom', $request->file('lain_dom'), $newNama_lain);
            // simpan nama fike di db
            $data = [
                'sp_kel_dom' => $newNama_sp,
                'ktp_dom' => $newNama_ktp,
                'kk_dom' => $newNama_kk,
                'lain_dom' => $newNama_lain,
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
    public function edit()
    {
        $query = userModel::find(Auth::user()->id);
        return view('masyarakat/editDom',compact('query'));
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
        $edit = antreanDomModel::where('id_dom',$id)->first();
        $ktp = $request->file('ktp_dom');
        $sp_kel = $request->file('sp_kel_dom');
        $kk = $request->file('kk_dom');
        $lain = $request->file('lain_dom');

        //    name
        $nama_sp = $sp_kel->getClientOriginalName();
        $nama_ktp = $ktp->getClientOriginalName();
        $nama_kk = $kk->getClientOriginalName();
        $nama_lain = $lain->getClientOriginalName();


        // extension
        $extension_sp = $sp_kel->getClientOriginalExtension();
        $extension_ktp = $ktp->getClientOriginalExtension();
        $extension_kk = $kk->getClientOriginalExtension();
        $extension_lain = $lain->getClientOriginalExtension();

        // new nama
        $newNama_sp = "SP_KEL-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_sp;
        $newNama_ktp = "KTP-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_ktp;
        $newNama_kk = "KK-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_kk;
        $newNama_lain = "Lain-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_lain;

        // path
        $path_sp = Storage::putFileAs('public/sp_kel_dom', $request->file('sp_kel_dom'), $newNama_sp);
        $path_ktp = Storage::putFileAs('public/ktp_dom', $request->file('ktp_dom'), $newNama_ktp);
        $path_kk = Storage::putFileAs('public/kk_dom', $request->file('kk_dom'), $newNama_kk);
        $path_lain = Storage::putFileAs('public/lain_dom', $request->file('lain_dom'), $newNama_lain);

        $data = [
            'sp_kel_dom' => $newNama_sp,
            'ktp_dom' => $newNama_ktp,
            'kk_dom' => $newNama_kk,
            'lain_dom' => $newNama_lain,
            // 'tgl_antre_dom' => '2023-02-01',
            'fk_id_user' => Auth::user()->id,
            'fk_status' => 1

        ];

       antreanDomModel::where('id_dom', $id)->update($data);
       return redirect('/dashMasy')->with('berhasil', 'Berkas Berhasil diedit! Silakan Cek Melalui Riwayat');

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