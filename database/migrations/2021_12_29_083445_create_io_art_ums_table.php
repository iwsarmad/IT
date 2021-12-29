<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoArtUmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ||||||||
        Schema::create('io_art_ums', function (Blueprint $table) {
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("COD_ART")->nullable();
            $table->string("UM")->nullable();
            $table->string("DESC_UM")->nullable();
            $table->string("FAT_CONV")->nullable();
            $table->string("TIPO_UM")->nullable();
            $table->string("FLG_DEFAULT")->nullable();
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
        Schema::dropIfExists('io_art_ums');
    }
}
