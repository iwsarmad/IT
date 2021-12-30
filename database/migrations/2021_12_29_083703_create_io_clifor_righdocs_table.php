<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforRighdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ||||||||||||||||||
        Schema::create('io_clifor_righdocs', function (Blueprint $table) {
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('NUM_REG')->nullable();
            $table->string('PRG_RIGA')->nullable();
            $table->string('COD_RIGA')->nullable();
            $table->string('DES_RIGA')->nullable();
            $table->string('COD_UM')->nullable();
            $table->string('QTA')->nullable();
            $table->string('PRZ_LORDO')->nullable();
            $table->string('PRZ_NETTO')->nullable();
            $table->string('COD_VALUTA')->nullable();
            $table->string('IMPORTO')->nullable();
            $table->string('SC_1')->nullable();
            $table->string('SC_2')->nullable();
            $table->string('DATA_CONFERMA')->nullable();
            $table->string('TIPO_CLIFOR')->nullable();
            $table->string('COD_CLIFOR')->nullable();
            $table->string('DAT_ULT_MOD')->nullable();
            $table->string('COD_ART')->nullable();

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
        Schema::dropIfExists('io_clifor_righdocs');
    }
}
