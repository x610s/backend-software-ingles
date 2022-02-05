<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosibleRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posible_respuesta', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger("pregunta_id");
            $table->foreign('pregunta_id')->references('id')->on('pregunta');
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
        Schema::dropIfExists('posible_respuesta');
    }
}
