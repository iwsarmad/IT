<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoListiniFullsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_listini_fulls', function (Blueprint $table) {
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('TIPO_LISTINO')->nullable();
            $table->string('COD_ART')->nullable();
            $table->string('TIPO_CLIFOR')->nullable();
            $table->string('COD_CLIFOR')->nullable();
            $table->string('COD_DEPOSITO')->nullable();
            $table->string('COD_MACROAREA')->nullable();
            $table->string('COD_AREA')->nullable();
            $table->string('COD_ZONA')->nullable();
            $table->string('COD_MACROCATEGORIA')->nullable();
            $table->string('COD_CATEGORIA')->nullable();
            $table->string('COD_SOTTOCATEGORIA')->nullable();
            $table->string('COD_FAM_INIZIO')->nullable();
            $table->string('COD_FAM_FINE')->nullable();
            $table->string('COD_SFAM_INIZIO')->nullable();
            $table->string('COD_SFAM_FINE')->nullable();
            $table->string('COD_GRUPPO_INIZIO')->nullable();
            $table->string('COD_GRUPPO_FINE')->nullable();
            $table->string('COD_SGRUPPO_INIZIO')->nullable();
            $table->string('COD_SGRUPPO_FINE')->nullable();
            $table->string('COD_LISTINO')->nullable();
            $table->string('COD_CAMPAGNA')->nullable();
            $table->string('COD_DESTINAZIONE')->nullable();
            $table->string('COD_CLASSE')->nullable();
            $table->string('QUANTITA_INIZIO')->nullable();
            $table->string('QUANTITA_FINE')->nullable();
            $table->string('DATA_INIZIO')->nullable();
            $table->string('DATA_FINE')->nullable();
            $table->string('PREZZO')->nullable();
            $table->string('PRIORITA')->nullable();
            $table->string('SCONTO1')->nullable();
            $table->string('SCONTO2')->nullable();
            $table->string('SCONTO3')->nullable();
            $table->string('SCONTO4')->nullable();
            $table->string('SCONTO5')->nullable();
            $table->string('SCONTO6')->nullable();
            $table->string('SCONTO_IMP')->nullable();
            $table->string('MAG_PERC1')->nullable();
            $table->string('MAG_PERC2')->nullable();
            $table->string('MAG_IMP')->nullable();
            $table->string('IND_GES_PREZZO')->nullable();
            $table->string('IND_GES_SC1_PER')->nullable();
            $table->string('IND_GES_SC2_PER')->nullable();
            $table->string('IND_GES_SC3_PER')->nullable();
            $table->string('IND_GES_SC4_PER')->nullable();
            $table->string('IND_GES_SC5_PER')->nullable();
            $table->string('IND_GES_SC6_PER')->nullable();
            $table->string('IND_GES_SC_IMP')->nullable();
           // $table->string('IND_GES_MAG1_PER')->nullable();
            $table->string('IND_GES_MAG1_PER')->nullable();
            $table->string('IND_GES_MAG2_PER')->nullable();
            $table->string('IND_GES_MAG_IMP')->nullable();
            $table->string('FLG_ESCLUDI_SCONTI')->nullable();
            $table->string('COD_COMBINAZIONE')->nullable();
            $table->string('COD_VALUTA')->nullable();
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
        Schema::dropIfExists('io_listini_fulls');
    }
}
