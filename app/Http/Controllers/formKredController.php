<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\antreanKredModel;
use App\Models\userModel;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

class formKredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = userModel::find(Auth::user()->id);
        return view('masyarakat/formKred',compact('query'));
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
            $sp_kel = $request->file('sp_kel_kred');
            $ktp = $request->file('ktp_kred');
            $kk = $request->file('kk_kred');
            $lain = $request->file('lain_kred');
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
            //simpan file storage
            $path_sp = Storage::putFileAs('public/sp_kel_kred', $request->file('sp_kel_kred'), $newNama_sp);
            $path_ktp = Storage::putFileAs('public/ktp_kred', $request->file('ktp_kred'), $newNama_ktp);
            $path_kk = Storage::putFileAs('public/kk_kred', $request->file('kk_kred'), $newNama_kk);
            $path_lain = Storage::putFileAs('public/lain_kred', $request->file('lain_kred'), $newNama_lain);
            //simpan file db
            $data = [
                'sp_kel_kred' => $path_sp,
                'ktp_kred' => $path_ktp,
                'kk_kred' => $path_kk,
                'lain_kred' => $path_lain,
                'fk_id_user' => Auth::user()->id,
                'fk_status' =>1

            ];

            antreanKredModel::create($data);
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
        $query = userModel::find(Auth::user()->id);
        return view('masyarakat/editKred',compact('query'));
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
        $edit = antreanKredModel::where('id_kred',$id)->first();

        $sp_kel = $request->file('sp_kel_kred');
        $ktp = $request->file('ktp_kred');
        $kk = $request->file('kk_kred');
        $lain = $request->file('lain_kred');

        // nama
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
        $path_sp = Storage::putFileAs('public/sp_kel_kred', $request->file('sp_kel_kred'), $newNama_sp);
        $path_ktp = Storage::putFileAs('public/ktp_kred', $request->file('ktp_kred'), $newNama_ktp);
        $path_kk = Storage::putFileAs('public/kk_kred', $request->file('kk_kred'), $newNama_kk);
        $path_lain = Storage::putFileAs('public/lain_kred', $request->file('lain_kred'), $newNama_lain);
        $data = [
            'sp_kel_kred' => $newNama_sp,
            'ktp_kred' => $newNama_ktp,
            'kk_kred' => $newNama_kk,
            'lain_kred' => $newNama_lain,
            'fk_id_user' => Auth::user()->id,
            'fk_status' =>1

        ];

        antreanKredModel::where('id_kred', $id)->update($data);
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
