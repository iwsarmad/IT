<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillOfLandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_of_landings', function (Blueprint $table) {
            $table->id();
            // BILL OF LADING
            $table->integer('trip_id');
            $table->string('shippers');
            $table->integer('order_id');
            $table->longText('BillOfLading');
            $table->integer('bar_id');
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
        Schema::dropIfExists('bill_of_landings');
    }
}
