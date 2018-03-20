<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouvrirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couvrir', function (Blueprint $table) {
            $table->integer('id_jeune');
            $table->integer('id_sante');
            $table->boolean('travailhandicape');
            $table->dateTime('datefin_travailhandicape');
            $table->boolean('connaissancedroit_sante');
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
        Schema::dropIfExists('couvrir');
    }
}
