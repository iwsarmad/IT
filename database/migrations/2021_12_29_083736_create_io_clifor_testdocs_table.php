<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforTestdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ||||||||||||||||||||||||||||||||
        Schema::create('io_clifor_testdocs', function (Blueprint $table) {
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("TIPO_CLIFOR")->nullable();
            $table->string("COD_CLIFOR")->nullable();
            $table->string("COD_TIPODOC")->nullable();
            $table->string("COD_STIPODOC")->nullable();
            $table->string("FLGDAEVADERE")->nullable();
            $table->string("DATA_DOC")->nullable();
            $table->string("NUMREG")->nullable();
            $table->string("TIPODOC")->nullable();
            $table->string("TIPO")->nullable();
            $table->string("SOTTOTIPO")->nullable();
            $table->string("DATAREG")->nullable();
            $table->string("SEZIONALE")->nullable();
            $table->string("NUMDOC")->nullable();
            $table->string("DOCORIG")->nullable();
            $table->string("DEPOSITO")->nullable();
            $table->string("COD_VALUTA")->nullable();
            $table->string("VALUTA")->nullable();
         //   $table->string("CHIAVE")->nullable();
            $table->string("TOTALEDOC")->nullable();
            $table->string("DATACONS")->nullable();
            $table->string("SCADENZE")->nullable();
            $table->string("TIPOSTATO_DOC")->nullable();
            $table->string("ESTCONT")->nullable();
            $table->string("DESSTATO_DOC")->nullable();
            $table->string("DATA_FATT")->nullable();
            $table->string("NUM_FATT")->nullable();
            $table->string("NOTE_DOC")->nullable();
            $table->string("DATA_CONSEGNA")->nullable();
            $table->string("DAT_ULT_MOD")->nullable();
            $table->string("NUM_DOC")->nullable();
            $table->string("DES_NOTE")->nullable();
            $table->string("DES_DOC")->nullable();

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
        Schema::dropIfExists('io_clifor_testdocs');
    }
}
