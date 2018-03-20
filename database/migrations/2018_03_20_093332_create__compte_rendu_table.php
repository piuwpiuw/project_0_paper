<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompteRenduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_rendu', function (Blueprint $table) {
            $table->integer('id_conseiller');
            $table->integer('id_jeune');
            $table->dateTime('date');
            $table->string('contenu');
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
        Schema::dropIfExists('compte_rendu');
    }
}
