<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacidads', function (Blueprint $table) {
            $table->id();

            $table->integer('banqueteSinBaile')->nullable();
            $table->integer('banqueteConBaile')->nullable();
            $table->integer('cocktail')->nullable();
            $table->integer('actos')->nullable();
            $table->integer('buffet')->nullable();
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
        Schema::dropIfExists('capacidads');
    }
}
