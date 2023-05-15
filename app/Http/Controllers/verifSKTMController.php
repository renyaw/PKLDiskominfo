<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

use App\Models\antreanSKTMModel;

use App\Models\layananSKTMModel;

use Carbon\Carbon;

class verifSKTMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = antreanSKTMModel::all();

        return view('kelurahan/verifSKTM',compact('query'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = antreanSKTMModel::where('id_sktm',$id)->first();
        return view('kelurahan/verifSKTM', compact('data'));
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

    public function download($id)
    {
        try {
            Storage::disk('local')->download('');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function diterima($id)
    {
        $id_sktm = antreanSKTMModel::where('id_sktm',$id)->first();
        $update = DB::table('antrean_sktm')
                    ->where('id_sktm', $id)
                    ->update(['fk_status' => 2]);

        //pindah ke tabel sktm
        $fk_id_sktm = $id_sktm->id_sktm;
        $layananSKTM = new layananSKTMModel;
        $layananSKTM->fk_id_sktm = $fk_id_sktm; 
        $layananSKTM->tgl_sktm = Carbon::now();
        $layananSKTM->save();

        return redirect('/antreanSKTM');
    }

    public function ditolak($id)
    {
        $id_sktm = antreanSKTMModel::where('id_sktm',$id)->first();
        $update = DB::table('antrean_sktm')
                    ->where('id_sktm', $id)
                    ->update(['fk_status' => 3]);

        return redirect('/antreanSKTM');
    }

    public function kembali($id)
    {
        $id_sktm = antreanSKTMModel::where('id_sktm',$id)->first();
        return redirect('/antreanSKTM');
    }

}
