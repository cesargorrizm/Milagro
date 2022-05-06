<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descripcion');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('capacidad_id')->nullable();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('capacidad_id')->references('id')->on('capacidads')->onDelete('set null');
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
        Schema::dropIfExists('sectors');
    }
}
