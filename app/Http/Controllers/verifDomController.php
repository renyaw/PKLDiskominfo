<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

use App\Models\antreanDomModel;

class verifDomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = antreanDomModel::all();

        return view('kelurahan/verifDom',compact('query'));
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
        $path_sp = Storage::url('public/sp_kel_dom');
        $path_ktp = Storage::url('public/ktp_dom');
        $path_kk = Storage::url('public/kk_dom');
        $path_lain = Storage::url('public/lain_dom');
        $data = [
            'sp_kel_dom' => $path_sp,
            'ktp_dom' => $path_ktp,
            'kk_dom' => $path_kk,
            'lain_dom' => $path_lain,
            'fk_id_user' => Auth::user()->id,
            'fk_status' => 1
        ];
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
}
