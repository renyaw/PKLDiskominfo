<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahanModel extends Model
{
    use HasFactory;

    protected $table = 'kelurahan';
    protected $guarded = [];

    //Kecamatan
    public function kel_kec()
    {
        return $this->belongsTo(kelurahanModel::class, 'fk_id_kec', 'id_kec');
    }
    public function kec_user()
    {
        return $this->hasMany(userModel::class, 'fk_id_kel', 'id_kel');
    }
}
