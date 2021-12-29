<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforDetconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_clifor_detcons', function (Blueprint $table) {

            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("TIPO_CLIFOR")->nullable();
            $table->string("COD_CLIFOR")->nullable();
            $table->string("ID_CONTATTO")->nullable();
            $table->string("TIPO_CONTATTO")->nullable();
            $table->string("PREF")->nullable();
            $table->string("COGNOME_NOME")->nullable();
            $table->string("NOME")->nullable();
            $table->string("INDIRIZZO")->nullable();
            $table->string("CAP")->nullable();
            $table->string("CITTA")->nullable();
            $table->string("PR")->nullable();
            $table->string("ORARIO_LAVORO")->nullable();
            $table->string("TELEFONO1")->nullable();
            $table->string("TELEFONO2")->nullable();
            $table->string("CELLULARE1")->nullable();
            $table->string("CELLULARE2")->nullable();
            $table->string("TELEF_CASA")->nullable();
            $table->string("FAX")->nullable();
            $table->string("EMAIL1")->nullable();
            $table->string("EMAIL2")->nullable();
            $table->string("ALTRO_INDIRIZZO1")->nullable();
            $table->string("ALTRO_INDIRIZZO2")->nullable();
            $table->string("NOTE")->nullable();
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
        Schema::dropIfExists('io_clifor_detcons');
    }
}
