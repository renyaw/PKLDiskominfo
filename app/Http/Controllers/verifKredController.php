<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

use App\Models\antreanKredModel;

use App\Models\layananKredModel;

use Carbon\Carbon;

class verifKredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = antreanKredModel::all();

        return view('kelurahan/verifKred',compact('query'));
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
        $data = antreanKredModel::where('id_kred',$id)->first();
        return view('kelurahan/verifKred', compact('data'));
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
        $id_kred = antreanKredModel::where('id_kred',$id)->first();
        $update = DB::table('antrean_kred')
                    ->where('id_kred', $id)
                    ->update(['fk_status' => 2]);

        //pindah ke tabel kredit
        $fk_id_kred = $id_kred->id_kred;
        $layananKred = new layananKredModel;
        $layananKred->fk_id_kred = $fk_id_kred;
        $layananKred->tgl_kred = Carbon::now();
        $layananKred->save();

        return redirect('/antreanKred');

    }

    public function ditolak($id)
    {
        $id_kred = antreanKredModel::where('id_kred',$id)->first();
        $update = DB::table('antrean_kred')
                    ->where('id_kred', $id)
                    ->update(['fk_status' => 3]);

        return redirect('/antreanKred');
    }

    public function kembali($id)
    {
        $id_kred = antreanKredModel::where('id_kred',$id)->first();
        return redirect('/antreanKred');
    }

}

