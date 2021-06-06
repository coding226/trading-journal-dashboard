<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->string('trade_num');
            $table->biginteger('subuser_id');
            $table->biginteger('symbol_id');
            $table->datetime('start_datetime');
            $table->datetime('end_datetime')->nullable();
            $table->string('duration')->nullable();
            $table->string('long_short');
            $table->string('positionsize')->nullable();
            $table->string('pips')->nullable();
            $table->string('fees')->nullable();
            $table->string('profit_gl')->nullable();
            $table->string('percentage_gl')->nullable();
            $table->string('stoplossval')->nullable();
            $table->string('open_price');
            $table->string('close_price')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('trades');
    }
}
