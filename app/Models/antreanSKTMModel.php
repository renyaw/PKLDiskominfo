<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antreanSKTMModel extends Model
{
    use HasFactory;
    protected $table = 'antrean_sktm';
    protected $guarded = [];

    public function permohonan_sktm()
    {
        return $this->belongsTo(userModel::class, 'fk_id_user', 'id');
    }

    public function antre_stat_sktm()
    {
        return $this->belongsTo(statusModel::class, 'fk_status', 'id_status');
    }

    public function antre_sktm()
    {
        return $this->belongsTo(layananSKTMModel::class, 'fk_id_sktm', 'id_sktm');
    }
}
