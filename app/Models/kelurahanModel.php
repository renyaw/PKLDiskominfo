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
        return $this->belongsTo(kelurahanModel::class, 'kecamatan', 'id_kec');
    }
    public function kel_user()
    {
        return $this->hasMany(userModel::class, 'kelurahan', 'id_kel');
    }
}
