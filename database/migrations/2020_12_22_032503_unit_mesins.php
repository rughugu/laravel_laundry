<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnitMesins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('laundry.unit_mesins', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('merk_mesin')->index();
            $table->string('nama_mesin')->index();
            $table->string('type_mesin')->index();
            $table->string('kapasitas_mesin')->index();
            $table->string('tahun_mesin')->index();
            $table->integer('id_kategori')->index();
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
        //
    }
}
