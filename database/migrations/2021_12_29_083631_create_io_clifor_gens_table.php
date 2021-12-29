<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_clifor_gens', function (Blueprint $table) {
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("TIPO_CLIFOR")->nullable();
            $table->string("COD_CLIFOR")->nullable();
            $table->string("RAG_SOC")->nullable();
            $table->string("INDIRIZZO")->nullable();
            $table->string("PARTITA_IVA")->nullable();
            $table->string("CODICE_FISCALE")->nullable();
            $table->string("TELEFONO1")->nullable();
            $table->string("TELEFONO2")->nullable();
            $table->string("FAX")->nullable();
            $table->string("CELLULARE")->nullable();
            $table->string("EMAIL")->nullable();
            $table->string("INTERNET")->nullable();
            $table->string("CAP")->nullable();
            $table->string("CITTA")->nullable();
            $table->string("PROVINCIA")->nullable();
            $table->string("LATITUDINE")->nullable();
            $table->string("LONGITUDINE")->nullable();
            $table->string("COD_CLASSE_SCONTO")->nullable();
            $table->string("FLG_MOD_NEL_DISP")->nullable();
            $table->string("FLG_DEPERIBILITA")->nullable();
            $table->string("COD_CAT_EXTRA_SCONTO")->nullable();
            $table->string("COD_SVILUPPO")->nullable();
            $table->string("NAZIONE")->nullable();
            $table->string("PAGAMENTO")->nullable();
            $table->string("BANCA")->nullable();
            $table->string("AGENZIA")->nullable();
            $table->string("LISTINO_ANAGRAFICO")->nullable();
            $table->string("VALUTA")->nullable();
            $table->string("SCONTI_ANAG_PERC")->nullable();
            $table->string("SCONTI_ANAG_IMP")->nullable();
            $table->string("MAGGIORAZIONE_ANAG_PERC")->nullable();
            $table->string("SCONTO_PIEDE")->nullable();
            $table->string("COD_LISTINO")->nullable();
            $table->string("COD_CONDPAG")->nullable();
            $table->string("COD_VALUTA")->nullable();
            $table->string("MACROAREA")->nullable();
            $table->string("DATA_CREAZIONE")->nullable();
            $table->string("AREA")->nullable();
            //|||||||||||||||||

            $table->string("ZONA")->nullable();
            $table->string("MACROCATEGORIA")->nullable();
            $table->string("DATA_ULT_DOC_NO_FT")->nullable();
            $table->string("CATEGORIA")->nullable();
            $table->string("SOTTOCATEGORIA")->nullable();
            $table->string("DATA_ULT_DOC_FT")->nullable();
            $table->string("DATA_ULT_ORDINE")->nullable();
            $table->string("FIDO_AZIENDALE")->nullable();
            $table->string("DES_RAGGR1")->nullable();
            $table->string("DES_RAGGR2")->nullable();
            $table->string("DES_RAGGR3")->nullable();
            $table->string("COD_MACROAREA")->nullable();
            $table->string("COD_AREA")->nullable();
            $table->string("COD_ZONA")->nullable();
            $table->string("COD_MACROCATEGORIA")->nullable();
            $table->string("COD_SOTTOCATEGORIA")->nullable();
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
        Schema::dropIfExists('io_clifor_gens');
    }
}
