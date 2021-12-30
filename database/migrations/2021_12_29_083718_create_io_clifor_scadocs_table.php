<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforScadocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_clifor_scadocs', function (Blueprint $table) {
            // |||||||||||||||||||
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("COD_RATA")->nullable();
            $table->string("DAT_SCAD")->nullable();
            $table->string("IMPORTO")->nullable();
            $table->string("NETTO_PREV")->nullable();
            $table->string("DES_TIPO")->nullable();
            $table->string("DES_STATO")->nullable();
            $table->string("DES_TIPO_PRES")->nullable();
            $table->string("DES_OPERAZIONE")->nullable();
            $table->string("FLG_DA_LIB")->nullable();
            $table->string("FLG_SOSP")->nullable();
            $table->string("DES_BANCA_AGENZIA")->nullable();
            $table->string("TIPO_CLIFOR")->nullable();
            $table->string("COD_CLIFOR")->nullable();
            $table->string("DATA_DOC")->nullable();
            $table->string("NUM_DOC")->nullable();
            $table->string("COD_VALUTA")->nullable();
            $table->string("DAT_ULT_MOD")->nullable();

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
        Schema::dropIfExists('io_clifor_scadocs');
    }
}
