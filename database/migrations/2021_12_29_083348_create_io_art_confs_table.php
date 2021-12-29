<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoArtConfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_art_confs', function (Blueprint $table) {

            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('COD_ART')->nullable();
            $table->string('DES_ART')->nullable();
            $table->string('COD_FAM')->nullable();
            $table->string('DES_FAM')->nullable();
            $table->string('COD_SFAM')->nullable();
            $table->string('DES_SFAM')->nullable();
            $table->string('COD_GRUPPO1')->nullable();
            $table->string('DES_GRUPPO1')->nullable();
            $table->string('COD_GRUPPO2')->nullable();
            $table->string('DES_GRUPPO2')->nullable();
            $table->string('UM1')->nullable();
            $table->string('UM2')->nullable();
            $table->string('FATTORE_CONVERSIONE')->nullable();
            $table->string('DES_GR_STAT1')->nullable();
            $table->string('DES_GR_STAT2')->nullable();
            $table->string('QTA_MIN_VEND')->nullable();
            $table->string('COD_CLASSE_SCONTO')->nullable();
            $table->string('COD_DEPERIBILITA')->nullable();
            $table->string('PREZZO_MIN_VEN')->nullable();
        //    $table->string('SCONTO_MAX_VEN')->nullable();
            $table->string('MAX_EXTRA_SCONTO')->nullable();
            $table->string('FLG_LOCK_UM_DEFAULT')->nullable();
            $table->string('DES_FILTRO1')->nullable();
            $table->string('SCONTO_MAX_VEN')->nullable();
            $table->string('DES_FILTRO3')->nullable();
            $table->string('DAT_ULT_MOD')->nullable();
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
        Schema::dropIfExists('io_art_confs');
    }
}
