<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antreanSKTMModel;
use App\Models\userModel;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
class formSKTM2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = userModel::find(Auth::user()->id);
        $pack = antreanSKTMModel::all();
        return view('masyarakat/formSKTM2',compact('query','pack'));
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
            $sp_kel = $request->file('sp_kel_sktm');
            $ktp = $request->file('ktp_sktm');
            $kk = $request->file('kk_sktm');
            $lain = $request->file('lain_sktm');
            $sp_tdkmampu = $request->file('sp_tdkmampu');
            $nama_sp = $sp_kel->getClientOriginalName();
            $nama_ktp = $ktp->getClientOriginalName();
            $nama_kk = $kk->getClientOriginalName();
            $nama_lain = $lain->getClientOriginalName();
            $nama_sp_tdkmampu = $sp_tdkmampu->getClientOriginalName();
            $extension_sp = $sp_kel->getClientOriginalExtension();
            $extension_ktp = $ktp->getClientOriginalExtension();
            $extension_kk = $kk->getClientOriginalExtension();
            $extension_lain = $lain->getClientOriginalExtension();
            $extension_sp_tdkmampu = $sp_tdkmampu->getClientOriginalExtension();
            $newNama_sp = $nama_sp.'.'.$extension_sp;
            $newNama_ktp = $nama_ktp.'.'.$extension_ktp;
            $newNama_kk = $nama_kk.'.'.$extension_kk;
            $newNama_lain = $nama_lain.'.'.$extension_lain;
            $newNama_sp_tdkmampu = $nama_sp_tdkmampu.'.'.$extension_sp_tdkmampu;
            $path_sp = Storage::putFileAs('public/sp_kel_sktm', $request->file('sp_kel_sktm'), $newNama_sp);
            $path_ktp = Storage::putFileAs('public/ktp_sktm', $request->file('ktp_sktm'), $newNama_ktp);
            $path_kk = Storage::putFileAs('public/kk_sktm', $request->file('kk_sktm'), $newNama_kk);
            $path_lain = Storage::putFileAs('public/lain_sktm', $request->file('lain_sktm'), $newNama_lain);
            $path_sp_tdkmampu = Storage::putFileAs('public/sp_tdkmampu', $request->file('sp_tdkmampu'), $newNama_sp_tdkmampu);
            $this->validate($request,[
                'tujuan' => 'required'
            ]);

            $data = [
                'sp_kel_sktm' => $path_sp,
                'ktp_sktm' => $path_ktp,
                'kk_sktm' => $path_kk,
                'lain_sktm' => $path_lain,
                'sp_tdkmampu' => $path_sp_tdkmampu,
                'tujuan' => $request->tujuan,
                'fk_id_user' => Auth::user()->id,
                'fk_status' =>1
                // 'fk_id_kec' => Auth::
                // 'fk_id_kel' =>
            ];



            antreanSKTMModel::create($data);

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
        $pack = antreanSKTMModel::all();
        return view('masyarakat/editSKTM',compact('query','pack'));
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
        $edit = antreanSKTMModel::where('id_sktm',$id)->first();

        // Input
        $sp_kel = $request->file('sp_kel_sktm');
        $ktp = $request->file('ktp_sktm');
        $kk = $request->file('kk_sktm');
        $lain = $request->file('lain_sktm');
        $sp_tdkmampu = $request->file('sp_tdkmampu');

        // Nama
        $nama_sp = $sp_kel->getClientOriginalName();
        $nama_ktp = $ktp->getClientOriginalName();
        $nama_kk = $kk->getClientOriginalName();
        $nama_lain = $lain->getClientOriginalName();
        $nama_sp_tdkmampu = $sp_tdkmampu->getClientOriginalName();

        // Extension
        $extension_sp = $sp_kel->getClientOriginalExtension();
        $extension_ktp = $ktp->getClientOriginalExtension();
        $extension_kk = $kk->getClientOriginalExtension();
        $extension_lain = $lain->getClientOriginalExtension();
        $extension_sp_tdkmampu = $sp_tdkmampu->getClientOriginalExtension();

        // New Nama
        $newNama_sp = $nama_sp.'.'.$extension_sp;
        $newNama_ktp = $nama_ktp.'.'.$extension_ktp;
        $newNama_kk = $nama_kk.'.'.$extension_kk;
        $newNama_lain = $nama_lain.'.'.$extension_lain;
        $newNama_sp_tdkmampu = $nama_sp_tdkmampu.'.'.$extension_sp_tdkmampu;

        // Path
        $path_sp = Storage::putFileAs('public/sp_kel_sktm', $request->file('sp_kel_sktm'), $newNama_sp);
        $path_ktp = Storage::putFileAs('public/ktp_sktm', $request->file('ktp_sktm'), $newNama_ktp);
        $path_kk = Storage::putFileAs('public/kk_sktm', $request->file('kk_sktm'), $newNama_kk);
        $path_lain = Storage::putFileAs('public/lain_sktm', $request->file('lain_sktm'), $newNama_lain);
        $path_sp_tdkmampu = Storage::putFileAs('public/sp_tdkmampu', $request->file('sp_tdkmampu'), $newNama_sp_tdkmampu);

        // Validate
        $this->validate($request,[
            'tujuan' => 'required'
        ]);

        $data = [
            'sp_kel_sktm' => $path_sp,
            'ktp_sktm' => $path_ktp,
            'kk_sktm' => $path_kk,
            'lain_sktm' => $path_lain,
            'sp_tdkmampu' => $path_sp_tdkmampu,
            'tujuan' => $request->tujuan,
            'fk_id_user' => Auth::user()->id,
            'fk_status' =>1

        ];

        antreanSKTMModel::where('id_sktm', $id)->update($data);
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
