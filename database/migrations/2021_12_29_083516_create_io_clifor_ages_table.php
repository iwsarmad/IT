<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoCliforAgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // |||||||
        Schema::create('io_clifor_ages', function (Blueprint $table) {
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('TIPO_CLIFOR')->nullable();
            $table->string('COD_CLIFOR')->nullable();
            $table->string('COD_AGE')->nullable();
            $table->string('RAGSOC_AGE')->nullable();
            $table->string('PREFERENZIALE')->nullable();
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
        Schema::dropIfExists('io_clifor_ages');
    }
}
