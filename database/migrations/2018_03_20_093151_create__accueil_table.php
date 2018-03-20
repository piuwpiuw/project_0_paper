<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccueilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail_accueil');
            $table->string('password_accueil');
            $table->string('nom_accueil');
            $table->string('prenom_accueil');                    
            $table->string('tel_accueil');  
            $table->integer('id_sadmin');                  
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
        Schema::dropIfExists('accueil');
    }
}
