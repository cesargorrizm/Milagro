<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->string('tripadvisor');
            $table->string('facebook');
            $table->string('miNube');
            $table->string('direccion');
            $table->string('horarioEntreSemana');
            $table->string('horarioFinSemana');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
