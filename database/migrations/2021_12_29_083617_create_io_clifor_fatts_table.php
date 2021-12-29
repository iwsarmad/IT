<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforFattsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_clifor_fatts', function (Blueprint $table) {
            // ||||||||
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("TIPO_CLIFOR")->nullable();
            $table->string("COD_CLIFOR")->nullable();
            $table->string("ANNO")->nullable();
            $table->string("MESE")->nullable();
            $table->string("COD_VALUTA")->nullable();
            $table->string("FATTURATO")->nullable();
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
        Schema::dropIfExists('io_clifor_fatts');
    }
}
