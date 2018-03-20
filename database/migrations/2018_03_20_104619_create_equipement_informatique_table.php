<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipementInformatiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipement_informatique', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_equipement');
            $table->boolean('webcam');
            $table->string('connexion_internet');
            $table->integer('id_jeune');
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
        Schema::dropIfExists('equipement_informatique');
    }
}
