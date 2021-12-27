<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('UroPrice')->default(0);
            $table->integer('UroToCustomer')->default(0);
            $table->integer('usdPrice')->default(0);
            $table->integer('usdToCustomer')->default(0);
            $table->integer('penaltyFessCost')->default(0);
            $table->integer('HandOverFessCost')->default(0);
            $table->integer('ContainerTwentyKg')->default(0);
            $table->integer('ContainerFortyKg')->default(0);
            $table->integer('ContainerFortyKgUpToThirtyOneDay')->default(0);
            $table->integer('ContainerFortyKgGraterThanThirtyOneDay')->default(0);
            $table->integer('ContainerTwentyKgUpToThanThirtyOneDay')->default(0);
            $table->integer('ContainerTwentyKgGraterThanThirtyOneDay')->default(0);
            $table->bigInteger('CompanyBalance')->default(0);
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
        Schema::dropIfExists('settings');
    }
}
