<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layananKredModel extends Model
{
    use HasFactory;
    protected $table = 'kredit';
    protected $guarded = [];

    public function kred_antre()
    {
        return $this->belongsTo(antreSKTMModel::class, 'fk_id_kred', 'id_kred');
    }
}
