<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arenas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->string('arena_name');
            $table->integer('number_field')->nullable();
            $table->string('grass_type')->nullable();
            $table->integer('number_light')->nullable();
            $table->boolean('subs_bench')->nullable();
            $table->double('day_price')->nullable();
            $table->double('night_price')->nullable();
            $table->boolean('refferee')->nullable();
            $table->boolean('spectators_seat')->nullable();
            $table->string('arena_address')->nullable();
            $table->string('start_day_time');
            $table->string('end_day_time');
            $table->string('end_night_time');
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
        Schema::dropIfExists('arenas');
    }
};