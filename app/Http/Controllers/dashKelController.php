<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\antreanDomModel;

use App\Models\antreanSKTMModel;

use App\Models\antreanKredModel;

use DB;

class dashKelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $querydom = \DB::table('antrean_dom')
        ->select([
            \DB::raw('count(*) as jumlahdom')
        ])

        ->get()
        ;

        $querykred = \DB::table('antrean_kred')
        ->select([
            \DB::raw('count(*) as jumlahkred')
        ])

        ->get()
        ;

        $querysktm = \DB::table('antrean_sktm')
        ->select([
            \DB::raw('count(*) as jumlahsktm')
        ])

        ->get()

        ;

        return view('/kelurahan/dashKel', compact('querydom','querykred','querysktm'));

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
