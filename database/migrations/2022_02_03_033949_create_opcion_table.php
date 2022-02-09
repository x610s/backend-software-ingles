<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcion', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->text('imagen')->nullable();
            $table->string('color')->nullable();
            $table->tinyInteger('correcta')->default(0);
            $table->string('tipo')->default('imagen');
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
        Schema::dropIfExists('opcion');
    }
}
