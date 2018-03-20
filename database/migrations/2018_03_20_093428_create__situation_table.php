<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('situationfamiliale_jeune');         
            $table->string('nbenfant_jeune');                  
            $table->string('moyengarde_jeune');                  
            $table->string('logement_jeune'); 
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
        Schema::dropIfExists('situation');
    }
}
