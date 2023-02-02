<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusModel extends Model
{
    use HasFactory;
    //Antrean
    public function antre_sktm()
    {
        return $this->hasMany(antreSKTMModel::class, 'fk_status', 'id_status');
    }
    public function antre_dom()
    {
        return $this->hasMany(antreDomModel::class, 'fk_status', 'id_status');
    }
    public function antre_kred()
    {
        return $this->hasMany(kredDomModel::class, 'fk_status', 'id_status');
    }
    
}
