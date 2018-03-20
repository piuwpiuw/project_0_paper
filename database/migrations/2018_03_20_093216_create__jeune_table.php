<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeune', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail_jeune');
            $table->string('password_jeune');
            $table->string('civilite');
            $table->string('nom_jeune');
            $table->string('nomjeunefille_jeune');
            $table->string('prenom_jeune');                    
            $table->string('telfixe_jeune');
            $table->string('telportable_jeune');
            $table->dateTime('datenaissance_jeune');
            $table->integer('age_jeune');
            $table->string('lieunaissance_jeune');
            $table->string('adresse_jeune');
            $table->integer('cp_jeune');
            $table->string('ville_jeune');
            $table->string('nationalite_jeune');            
            $table->boolean('titresejour_jeune');           
            $table->dateTime('datevaliditesejour_jeune');
            $table->string('numero_pole_emploi');
            $table->string('situation_actuelle_jeune');
            $table->dateTime('dategroupement_jeune');
            $table->string('lien_signature_jeune');
            $table->boolean('creation_entreprise');                 
            $table->boolean('renseignement_createur');                 
            $table->integer('id_conseiller');                   
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
        Schema::dropIfExists('_jeune');
    }
}
