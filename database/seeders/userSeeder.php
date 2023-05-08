<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('users')->insert([
            'fk_id_kec'=>'1',
            'nama_kel'=>'Sidorejo Lor',
            'alamat_kel'=>'Jalan Ki Penjawi',
            'notelp_kel'=>'(0298) 321421'
        ]);
    }
}
