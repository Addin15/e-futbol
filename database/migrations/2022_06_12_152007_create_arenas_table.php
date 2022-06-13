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
            $table->string('number_field')->nullable();
            $table->string('grass_type')->nullable();
            $table->string('number_light')->nullable();
            $table->string('subs_bench')->nullable();
            $table->string('day_price')->nullable();
            $table->string('night_price')->nullable();
            $table->string('refferee')->nullable();
            $table->string('spectators_seat')->nullable();
            $table->string('arena_address')->nullable();
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