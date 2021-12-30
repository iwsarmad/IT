<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoStoartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('io_stoarts', function (Blueprint $table) {
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('COD_CLIFOR')->nullable();
            $table->string('COD_ART')->nullable();
            $table->string('DESC_ARTICOLO')->nullable();
            $table->string('NUM_RIGHE')->nullable();
            $table->string('ULT_NUM_REG')->nullable();
            $table->string('ULT_PROG_RIGA')->nullable();
            $table->string('ULT_QTA')->nullable();
            $table->string('ULT_PRZ')->nullable();
            $table->string('ULT_UM')->nullable();
            $table->string('ULT_QTA2')->nullable();
            $table->string('ULT_PRZ2')->nullable();
            $table->string('ULT_UM2')->nullable();
            $table->string('COD_DEST')->nullable();
            $table->string('ULT_SC_PER1')->nullable();
            $table->string('ULT_SC_PER2')->nullable();
            $table->string('ULT_SC_PER3')->nullable();
            $table->string('ULT_SC_PER4')->nullable();
            $table->string('ULT_SC_PER5')->nullable();
            $table->string('ULT_SC_PER6')->nullable();
            $table->string('ULT_SC_IMPORTO')->nullable();
            $table->string('ULT_MAG_PER1')->nullable();
            $table->string('ULT_MAG_PER2')->nullable();
            $table->string('ULT_MAG_IMPORTO')->nullable();
            $table->string('ULT_DATA')->nullable();
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
        Schema::dropIfExists('io_stoarts');
    }
}
