<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layananDomModel extends Model
{
    use HasFactory;
    protected $table = 'domisili';
    protected $guarded = [];
    //Antre
    public function dom_antre()
    {
        return $this->belongsTo(antreSKTMModel::class, 'fk_id_dom', 'id_dom');
    }


}
