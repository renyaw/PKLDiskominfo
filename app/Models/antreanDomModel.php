<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antreanDomModel extends Model
{
    use HasFactory;
    protected $table = 'antrean_dom';
    protected $guarded = [];

    public function permohonan_dom()
    {
        return $this->belongsTo(userModel::class, 'fk_id_user', 'id');
    }

    public function antre_stat_dom()
    {
        return $this->belongsTo(statusModel::class, 'fk_status', 'id_status');
    }

    public function antre_dom()
    {
        return $this->belongsTo(layananDomModel::class, 'fk_id_dom', 'id_dom');
    }
}
