<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nama_pemesan');
            $table->string('kamar_id');
            $table->string('hari');
            $table->string('total_harga');
            $table->enum('statusBooking',['terbooking','tidak terbooking']);
            $table->enum('statusTempat',['terisi','kosong']);
            $table->enum('statusBayar',['terbayar','belum terbayar']);
            $table->string('status')->default('pending');
            $table->string('snap_token')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
}
