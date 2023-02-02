<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layananSKTMModel extends Model
{
    use HasFactory;
    protected $table = 'sktm';
    protected $guarded = [];

    public function sktm_antre()
    {
        return $this->belongsTo(antreSKTMModel::class, 'fk_id_sktm', 'id_sktm');
    }
}
