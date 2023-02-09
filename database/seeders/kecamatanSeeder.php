<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('kecamatan')->insert([
            'nama_kec'=>'Sidorejo'
        ]);
        DB:: table('kecamatan')->insert([
            'nama_kec'=>'Tingkir'
        ]);
        DB:: table('kecamatan')->insert([
            'nama_kec'=>'Argomulyo'
        ]);
        DB:: table('kecamatan')->insert([
            'nama_kec'=>'sidomukti'
        ]);
    }
}
