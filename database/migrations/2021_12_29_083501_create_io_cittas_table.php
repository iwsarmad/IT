<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCittasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('io_cittas', function (Blueprint $table) {
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('CODICE')->nullable();
            $table->string('DESCRIZIONE')->nullable();
            $table->string('CAP')->nullable();
            $table->string('PROVINCIA')->nullable();
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
        Schema::dropIfExists('io_cittas');
    }
}
