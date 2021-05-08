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
            $table->biginteger('image_id');
            $table->biginteger('symbol_id');
            $table->datetime('start_datetime');
            $table->datetime('end_datetime');
            $table->string('long_short');
            $table->string('pips');
            $table->string('fees');
            $table->string('profit_gl');
            $table->string('percentage_gl');
            $table->string('open_price');
            $table->string('close_price');
            $table->string('description');
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
