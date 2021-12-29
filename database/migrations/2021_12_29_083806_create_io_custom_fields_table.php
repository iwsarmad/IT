<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCustomFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // |||||||||||
        Schema::create('io_custom_fields', function (Blueprint $table) {
            $table->id();
            $table->string("CHIAVE")->nullable();
            $table->string("COD_DITTA")->nullable();
            $table->string("NOME")->nullable();
            $table->string("VALORE")->nullable();
            $table->string("TIPO")->nullable();
            $table->string("CHIAVE_PADRE")->nullable();
            $table->string("CONTESTO")->nullable();
            $table->string("VISUAL_MASK")->nullable();
            $table->string("COD_EXT")->nullable();
            $table->string("ORDINAMENTO")->nullable();
            $table->string("TIPO_DATO")->nullable();
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
        Schema::dropIfExists('io_custom_fields');
    }
}
