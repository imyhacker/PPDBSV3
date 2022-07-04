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
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            // Gelombang
            $table->string('gelombang')->nullable();
            $table->string('jurusan')->nullable();
            
            // Data siswa
            $table->string('nama_siswa');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->string('agama');

            // Data ortu
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('status_ayah')->nullable();
            $table->string('status_ibu')->nullable();

            // Data Kontak
            $table->string('hp_ayah')->nullable();
            $table->string('hp_ibu')->nullable();
            $table->string('hp_siswa')->nullable();
            $table->string('rekomendasi')->nullable();
            $table->longText('alamat')->nullable();

            // ACC 
            $table->string('acc')->default(0)->nullable();
            $table->string('daful')->default(0)->nullable();

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
        Schema::dropIfExists('pendaftar');
    }
};
