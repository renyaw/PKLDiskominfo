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
        return $this->hasMany(kelurahanModel::class, 'fk_id_kec', 'id_kec');
    }
}
