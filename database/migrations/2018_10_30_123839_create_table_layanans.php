<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLayanans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->increments('id_layanan');
            $table->string('nama_layanan');
            $table->string('isi_layanan');
            $table->integer('jenislayanan_id')->unsigned();
            $table->foreign('jenislayanan_id')->references('id')->on('jenis_layanans')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('harga');
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
        Schema::dropIfExists('layanans');
    }
}
