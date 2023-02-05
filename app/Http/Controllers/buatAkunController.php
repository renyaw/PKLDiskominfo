<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\userModel;
use App\Models\kecamatanModel;
use App\Models\kelurahanModel;



class buatAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kecamatanModel::all();
        $isi = userModel::all();
        return view('buatAkun',compact('data', 'isi'));
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

        // Validate
        $validated = $request->validate([
            'nik' => 'required|unique:users|max:16|min:16',
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required|date',
            'no_telp' => 'required',
            'nama_ibu' => 'required|max:255',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'alamat' => 'required',
            'username' => 'required|unique:users|min:5',
            'password' => 'min:6|confirmed|max:255',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        userModel::create($validated);

        $request->session()->flash('success', 'Akun Anda Berhasil Dibuat! Silahkan Melakukan Login!');
        return redirect('/login');
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
