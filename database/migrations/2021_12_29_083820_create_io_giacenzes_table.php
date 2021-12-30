<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIoGiacenzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('io_giacenzes', function (Blueprint $table) {
            // ||||||||
            $table->id();
            $table->string('CHIAVE')->nullable();
            $table->string('COD_DITTA')->nullable();
            $table->string('COD_ARTICOLO')->nullable();
            $table->string('COD_DEPOSITO')->nullable();
            $table->string('DESC_DEPOSITO')->nullable();
            $table->string('GIACENZA')->nullable();
            $table->string('DISPONIBILITA')->nullable();
            $table->string('UM1')->nullable();
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
        Schema::dropIfExists('io_giacenzes');
    }
}
