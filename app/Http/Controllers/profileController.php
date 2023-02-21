<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\userModel;
use App\Models\kecamatanModel;
use App\Models\kelurahanModel;


class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Auth::user();
        $query = userModel::find(Auth::user()->id);
        $data = kecamatanModel::all();
        $path = kelurahanModel::all();
        return view('masyarakat/profile',compact('query', 'data', 'path'));
    }

    public function getKelurahan(request $request){
        $id_kec = $request->id_kec;

        $kelurahans = kelurahanModel::where('fk_id_kec', $id_kec)->get();

        foreach ($kelurahans as $kel){
            echo "<option value='$kel->id_kel'>$kel->nama_kel</option>";
        }
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
        $query = userModel::find(Auth::user()->id);
        $data = kecamatanModel::all();
        $path = kelurahanModel::all();
        // return $query;

        return view('masyarakat/editProfile',compact('query', 'data', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         
        //return $request; 
        //Validate

        // $request->validate([
        //     'nik' => 'required|unique:users|max:16|min:16',
        //     'nama' => 'required|max:255',
        //     'tgl_lahir' => 'required|date',
        //     'no_telp' => 'required',
        //     'nama_ibu' => 'required|max:255',
        //     'kecamatan' => 'required',
        //     'kelurahan' => 'required',
        //     'alamat' => 'required',
        // ]);

        // auth()->user()->update([
        //     'nik' => $request->nik,
        //     'nama' =>  $request->nama,
        //     'tgl_lahir' =>  $request->tgl_lahir,
        //     'no_telp' =>  $request->no_telp,
        //     'nama_ibu' =>  $request->nama_ibu,
        //     'kecamatan' =>  $request->kecamatan,
        //     'kelurahan' =>  $request->kelurahan,
        //     'alamat' =>  $request->alamat,

        // ]);

        userModel::findorfail(auth()->user()->id)->update($request->all());
        return redirect('/profile')->with('status', 'Profil anda berhasil diedit!');

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
