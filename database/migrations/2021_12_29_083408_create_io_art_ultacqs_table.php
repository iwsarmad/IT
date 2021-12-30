<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoArtUltacqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_art_ultacqs', function (Blueprint $table) {


            // CHIAVE||||||||||
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('COD_ART')->nullable();
            $table->string('PROG')->nullable();

            $table->string('VALUTA')->nullable();
            $table->string('PRZ')->nullable();
            $table->string('DATA_DOC')->nullable();
            $table->string('NUM_DOC')->nullable();

            $table->string('COD_CLFOR')->nullable();
            $table->string('TIPO_DOC')->nullable();
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
        Schema::dropIfExists('io_art_ultacqs');
    }
}
