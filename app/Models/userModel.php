<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $guarded = ['fk_id_kel'];

    //Kelurahan
    public function user_kel()
    {
        return $this->belongsTo(kelurahanModel::class, 'kelurahan', 'id_kel');
    }
    public function user_kec()
    {
        return $this->belongsTo(kecamatanModel::class, 'kecamatan', 'id_kec');
    }
    //Antrean
    public function antrean_sktm()
    {
        return $this->hasMany(antreanSKTMModel::class, 'fk_id_sktm', 'id_sktm');
    }
    public function antrean_dom()
    {
        return $this->hasMany(antreanDomModel::class, 'fk_id_dom', 'id_dom');
    }
    public function antrean_kred()
    {
        return $this->hasMany(antreanKredModel::class, 'fk_id_sktm', 'id_sktm');
    }
}
