<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\userModel;
use App\Models\kecamatanModel;
use App\Models\kelurahanModel;

use App\Models\antreanDomModel;

use App\Models\antreanSKTMModel;
use App\Models\antreanKredModel;

class dashKecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = userModel::find(Auth::user()->id);
        $data = kecamatanModel::all();
        $path = kelurahanModel::all();

        $jumlahsktm = \DB::table('kelurahan')
                    ->leftJoin('antrean_sktm', 'kelurahan.id_kel', '=', 'antrean_sktm.fk_id_kel')
                    ->select('kelurahan.nama_kel', \DB::raw('count(antrean_sktm.id_sktm) as jumlah'))
                    ->where('antrean_sktm.fk_id_kec', Auth::user()->kecamatan)
                    ->groupBy('kelurahan.nama_kel')
                    ->get()
                    ;

        $jumlahdom = \DB::table('kelurahan')
                    ->leftJoin('antrean_dom', 'kelurahan.id_kel', '=', 'antrean_dom.fk_id_kel')
                    ->select('kelurahan.nama_kel', \DB::raw('count(antrean_dom.id_dom) as jumlah'))
                    ->where('antrean_dom.fk_id_kec', Auth::user()->kecamatan)
                    ->groupBy('kelurahan.nama_kel')
                    ->get()
                    ;

        $jumlahkred = \DB::table('kelurahan')
                    ->leftJoin('antrean_kred', 'kelurahan.id_kel', '=', 'antrean_kred.fk_id_kel')
                    ->select('kelurahan.nama_kel', \DB::raw('count(antrean_kred.id_kred) as jumlah'))
                    ->where('antrean_kred.fk_id_kec', Auth::user()->kecamatan)
                    ->groupBy('kelurahan.nama_kel')
                    ->get()
                    ;

        return view('/kecamatan/dashKec',compact('query', 'data', 'path', 'jumlahsktm', 'jumlahdom', 'jumlahkred'));
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
        return redirect('/dashKec2');
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
