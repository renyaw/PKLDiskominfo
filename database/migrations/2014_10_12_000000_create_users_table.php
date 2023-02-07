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
            $table->id('id')->autoIncrement();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->string('no_telp');
            $table->unsignedBigInteger('kelurahan');
            $table->unsignedBigInteger('kecamatan');
            $table->string('username')->unique();
            $table->string('password');
            // $table->unsignedBigInteger('fk_id_kel');
            // $table->unsignedBigInteger('fk_id_kec');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('kelurahan', function (Blueprint $table) {
            $table->id('id_kel');
            $table->string('nama_kel');
            $table->string('notelp_kel');
            $table->string('alamat_kel');
            $table->unsignedBigInteger('fk_id_kec');
            $table->timestamps();
        });

        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id('id_kec');
            $table->string('nama_kec');
            $table->timestamps();
        });
        Schema::create('antrean_dom', function (Blueprint $table) {
            $table->id('id_dom')->autoIncrement();
            $table->string('sp_kel_dom');
            $table->string('ktp_dom');
            $table->string('kk_dom');
            $table->string('lain_dom');
            $table->date('tgl_antre_dom');
            $table->unsignedBigInteger('fk_id_user');
            $table->unsignedBigInteger('fk_status');
            $table->timestamps();
        });
        Schema::create('antrean_kred', function (Blueprint $table) {
            $table->id('id_kred')->autoIncrement();
            $table->string('sp_kel_kred');
            $table->string('ktp_kred');
            $table->string('kk_kred');
            $table->string('lain_kred');
            $table->date('tgl_antre_kred');
            $table->unsignedBigInteger('fk_id_user');
            $table->unsignedBigInteger('fk_status');
            $table->timestamps();
        });
        Schema::create('antrean_sktm', function (Blueprint $table) {
            $table->id('id_sktm')->autoIncrement();
            $table->string('sp_kel_sktm');
            $table->string('sp_tdkmampu');
            $table->string('lain_sktm');
            $table->string('kk_sktm');
            $table->string('ktp_sktm');
            $table->string('tujuan');
            $table->date('tgl_antre_sktm');
            $table->unsignedBigInteger('fk_id_user');
            $table->unsignedBigInteger('fk_status');
            $table->timestamps();
        });
        Schema::create('status', function (Blueprint $table) {
            $table->id('id_status');
            $table->string('proses');
            $table->timestamps();
        });
        Schema::create('domisili', function (Blueprint $table) {
            $table->id('noreg_dom')->autoIncrement();
            $table->date('tgl_dom');
            $table->unsignedBigInteger('fk_id_dom');
            $table->timestamps();
        });
        Schema::create('kredit', function (Blueprint $table) {
            $table->id('noreg_kred')->autoIncrement();
            $table->date('tgl_kred');
            $table->unsignedBigInteger('fk_id_kred');
            $table->timestamps();
        });
        Schema::create('sktm', function (Blueprint $table) {
            $table->id('noreg_sktm')->autoIncrement();
            $table->date('tgl_sktm');
            $table->unsignedBigInteger('fk_id_sktm');
            $table->timestamps();
        });
        // Foreign Key
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('kelurahan')->references('id_kel')->on('kelurahan');
            $table->foreign('kecamatan')->references('id_kec')->on('kecamatan');
        });
        Schema::table('kelurahan', function (Blueprint $table) {
            $table->foreign('fk_id_kec')->references('id_kec')->on('kecamatan');
        });
        Schema::table('antrean_dom', function (Blueprint $table) {
            $table->foreign('fk_id_user')->references('id')->on('users');
            $table->foreign('fk_status')->references('id_status')->on('status');
        });
        Schema::table('antrean_kred', function (Blueprint $table) {
            $table->foreign('fk_id_user')->references('id')->on('users');
            $table->foreign('fk_status')->references('id_status')->on('status');
        });
        Schema::table('antrean_sktm', function (Blueprint $table) {
            $table->foreign('fk_id_user')->references('id')->on('users');
            $table->foreign('fk_status')->references('id_status')->on('status');
        });
        Schema::table('domisili', function (Blueprint $table) {
            $table->foreign('fk_id_dom')->references('id_dom')->on('antrean_dom');
        });
        Schema::table('kredit', function (Blueprint $table) {
            $table->foreign('fk_id_kred')->references('id_kred')->on('antrean_kred');
        });
        Schema::table('sktm', function (Blueprint $table) {
            $table->foreign('fk_id_sktm')->references('id_sktm')->on('antrean_sktm');
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
