<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('requerimiento');
            $table->string('respuesta')->nullable();
            $table->integer('orden');
            $table->tinyInteger('tipo')->default('1');
            $table->unsignedBigInteger('leccion_id');
            $table->timestamps();
            $table->foreign('leccion_id')->references('id')->on('leccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta');
    }
}
