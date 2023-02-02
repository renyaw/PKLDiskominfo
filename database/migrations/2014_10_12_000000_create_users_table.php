<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->id('id_kel');
            $table->string('nama_kel');
            $table->string('notelp_kel');
            $table->string('alamat_kel');
            $table->timestamps();
        });

        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id('id_kec');
            $table->string('nama_kec');
            $table->timestamps();
        });
        Schema::create('antrean_dom', function (Blueprint $table) {
            $table->id('id_dom');
            $table->string('sp_kel_dom)');
            $table->string('ktp_dom');
            $table->string('lain_dom');
            $table->date('tgl_antre_dom');
            $table->timestamps();
        });
        Schema::create('antrean_kred', function (Blueprint $table) {
            $table->id('id_kred');
            $table->string('sp_kel_kred');
            $table->string('ktp_kred');
            $table->string('kk_kred');
            $table->string('lain_kred');
            $table->date('tgl_antre_kred');
            $table->timestamps();
        });
        Schema::create('antrean_sktm', function (Blueprint $table) {
            $table->id('id_sktm');
            $table->string('sp_kel_sktm');
            $table->string('sp_tdkmampu');
            $table->string('lain_sktm');
            $table->string('kk_sktm');
            $table->string('ktp_sktm');
            $table->string('tujuan');
            $table->date('tgl_antre_sktm');
            $table->timestamps();
        });
        Schema::create('status', function (Blueprint $table) {
            $table->id('id_status');
            $table->string('proses');
            $table->timestamps();
        });
        Schema::create('domisili', function (Blueprint $table) {
            $table->id('noreg_dom');
            $table->date('tgl_dom');
            $table->timestamps();
        });
        Schema::create('kredit', function (Blueprint $table) {
            $table->id('noreg_kred');
            $table->date('tgl_kred');
            $table->timestamps();
        });
        Schema::create('sktm', function (Blueprint $table) {
            $table->id('noreg_sktm');
            $table->date('tgl_sktm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
