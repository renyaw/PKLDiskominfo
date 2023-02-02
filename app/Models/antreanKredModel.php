<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antreanKred extends Model
{
    use HasFactory;

    //User

    public function permohonan_kred()
    {
        return $this->belongsTo(userModel::class, 'fk_id_user', 'id_user');
    }

    //Status


    public function antre_stat_kred()
    {
        return $this->belongsTo(statusModel::class, 'fk_status', 'id_status');
    }
    //Layanan


    public function antre_kred()
    {
        return $this->belongsTo(layananKredModel::class, 'fk_id_kred', 'id_kred');
    }
}
