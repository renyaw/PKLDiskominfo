<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatanModel extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $guarded = [];

    //Kelurahan
    public function kec_kel()
    {
        return $this->hasMany(kelurahanModel::class, 'kecamatan', 'id_kec');
    }
    public function kec_user()
    {
        return $this->hasMany(kecamatanModel::class, 'user', 'id');
    }
}
