<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforDestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_clifor_dests', function (Blueprint $table) {
            // |||||||||||||||||
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("TIPO_CLIFOR")->nullable();
            $table->string("COD_CLIFOR")->nullable();
            $table->string("PREFERENZIALE")->nullable();
            $table->string("COD_DEST")->nullable();
            $table->string("RAG_SOC_DEST")->nullable();
            $table->string("INDIRIZZO")->nullable();
            $table->string("CAP")->nullable();
            $table->string("CITTA")->nullable();
            $table->string("PROVINCIA")->nullable();
            $table->string("STAMPA_PREF_DOC")->nullable();
            $table->string("TELEFONO")->nullable();
            $table->string("MAIL")->nullable();
            $table->string("FAX")->nullable();
            $table->string("NOTE_DEST")->nullable();
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
        Schema::dropIfExists('io_clifor_dests');
    }
}
