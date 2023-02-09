<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kec sidorejo
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'1',
            'nama_kel'=>'Sidorejo Lor',
            'alamat_kel'=>'Jalan Ki Penjawi',
            'notelp_kel'=>'(0298) 321421'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'1',
            'nama_kel'=>'Salatiga',
            'alamat_kel'=>'Jalan Watu Kreto RT.07 RW.08',
            'notelp_kel'=>'(0298) 321040'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'1',
            'nama_kel'=>'Bugel',
            'alamat_kel'=>'Jalan Mutiara No. 41',
            'notelp_kel'=>'(0298) 326653'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'1',
            'nama_kel'=>'Pulutan',
            'alamat_kel'=>'Jalan Siwelut No. 17',
            'notelp_kel'=>'(0298) 314816'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'1',
            'nama_kel'=>'Kauman Kidul',
            'alamat_kel'=>'Jalan Kigetas No. 13',
            'notelp_kel'=>'(0298) 312079'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'1',
            'nama_kel'=>'Blotongan',
            'alamat_kel'=>'Jalan Fatmawati No. 100 Kode Pos: 50715',
            'notelp_kel'=>'( 0298 ) 340331'
        ]);

        //kec tingkir
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'2',
            'nama_kel'=>'Tingkir Tengah',
            'alamat_kel'=>'Jalan Tanjung No. 1',
            'notelp_kel'=>'(0298) 328327'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'2',
            'nama_kel'=>'Tingkir Lor',
            'alamat_kel'=>'Jalan Kyai Zumri No. 1',
            'notelp_kel'=>'(0298) 314388'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'2',
            'nama_kel'=>'Kutowinangun Lor',
            'alamat_kel'=>'Jalan Taman Pahlawan',
            'notelp_kel'=>'(0298) 321015'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'2',
            'nama_kel'=>'Kutowinangun Kidul ',
            'alamat_kel'=>'Jalan Taman Pahlawan',
            'notelp_kel'=>'(0298) 321994'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'2',
            'nama_kel'=>'Sidorejo Kidul ',
            'alamat_kel'=>'Jalan Marditomo No. 39',
            'notelp_kel'=>'(0298) 315503'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'2',
            'nama_kel'=>'Gendongan ',
            'alamat_kel'=>'Jalan Dr. Muwardi No. 9',
            'notelp_kel'=>'(0298) 321213'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'2',
            'nama_kel'=>'Kalibening ',
            'alamat_kel'=>'Jalan Jafar Sodiq No. 15',
            'notelp_kel'=>'(0298) 312447'
        ]);

        //kec argomulyo
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'3',
            'nama_kel'=>'Ledok ',
            'alamat_kel'=>'Jalan Veteran',
            'notelp_kel'=>'(0298) 322315'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'3',
            'nama_kel'=>'Kumpulrejo ',
            'alamat_kel'=>'Jalan Raya Kumpulrejo',
            'notelp_kel'=>'(0298) 6031900'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'3',
            'nama_kel'=>'Tegalrejo',
            'alamat_kel'=>'Jalan Magersari No. 6',
            'notelp_kel'=>'(0298) 322580'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'3',
            'nama_kel'=>'Noborejo ',
            'alamat_kel'=>'Jalan Kelurahan No.1',
            'notelp_kel'=>'(0298) 321292'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'3',
            'nama_kel'=>'Cebongan ',
            'alamat_kel'=>'Jalan Soekarno Hatta No. 32',
            'notelp_kel'=>'(0298) 314621'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'3',
            'nama_kel'=>'Randuacir ',
            'alamat_kel'=>'Jalan Argosari Km.3',
            'notelp_kel'=>'(0298) 7316880'
        ]);

        //kec sidomukti
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'4',
            'nama_kel'=>'Mangunsari ',
            'alamat_kel'=>'Jalan Hasanudin No. 112 A',
            'notelp_kel'=>'(0298) 324848'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'4',
            'nama_kel'=>'Kecandran ',
            'alamat_kel'=>'Jalan Imam Bonjol No. 177',
            'notelp_kel'=>'(0298) 313871'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'4',
            'nama_kel'=>'Dukuh ',
            'alamat_kel'=>'Jalan Yudistira No. 27',
            'notelp_kel'=>'(0298) 322338'
        ]);
        DB:: table('kelurahan')->insert([
            'fk_id_kec'=>'4',
            'nama_kel'=>'Kalicacing ',
            'alamat_kel'=>'Jalan Slamet No. 10',
            'notelp_kel'=>'(0298) 321696'
        ]);
    }
}
