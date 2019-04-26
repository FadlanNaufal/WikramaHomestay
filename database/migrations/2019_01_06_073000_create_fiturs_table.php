<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFitursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiturs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_fitur');
            $table->string('file_fitur');
            $table->enum('jenis_fitur',['konsumsi','internet','lain']);
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
        Schema::dropIfExists('fiturs');
    }
}
