<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kamar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_kamar')->unique();
            $table->string('nama_kamar');
            $table->string('kapasitas_kamar');
            $table->enum('kelas_kamar',['vvip','vip','regular']);
            $table->string('nama_fitur')->nullable();
            $table->string('harga');
            $table->string('file_gambar');
            $table->string('keterangan');
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
        Schema::dropIfExists('table_kamar');
    }
}
