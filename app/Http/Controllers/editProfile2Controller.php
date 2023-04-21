<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\userModel;
use App\Models\kecamatanModel;
use App\Models\kelurahanModel;
use Illuminate\Support\Facades\Auth;

class editProfile2Controller extends Controller
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
        // return $query;

        return view('masyarakat/editProfile2',compact('query', 'data', 'path'));
    }
    public function detail($id)
    {

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
        //Validate
        $validated = $request->validate([
            'nik' => 'required|unique:users|max:16|min:16',
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required',
            'nama_ibu' => 'required|max:255',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'alamat' => 'required',
        ]);

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
