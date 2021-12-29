<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoArtConfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_art_confs', function (Blueprint $table) {
          //  ||||||
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_ART')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('COD_CONF')->nullable();
            $table->string('PZ_CONF')->nullable();
            $table->string('FLG_PREF')->nullable();
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
        Schema::dropIfExists('io_art_confs');
    }
}
