<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpProTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_pro', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_exp_pro');
            $table->string('nom_emploi');
            $table->boolean('actuel_emploi');
            $table->string('type_contrat');
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
        Schema::dropIfExists('exp__pro');
    }
}
