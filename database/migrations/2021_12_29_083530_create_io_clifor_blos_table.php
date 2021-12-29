<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforBlosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ||||||||
        Schema::create('io_clifor_blos', function (Blueprint $table) {
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("TIPO_CLIFOR")->nullable();
            $table->string("COD_CLIFOR")->nullable();
            $table->string("COD_BLOCCO")->nullable();
            $table->string("TIPO_BLOCCO")->nullable();
            $table->string("NOTA_BLOCCO")->nullable();
            $table->string("DATA_BLOCCO")->nullable();
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
        Schema::dropIfExists('io_clifor_blos');
    }
}
