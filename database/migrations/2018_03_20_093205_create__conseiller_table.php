<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConseillerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conseiller', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail_conseiller');
            $table->string('password_conseiller');
            $table->string('nom_conseiller');
            $table->string('prenom_conseiller');                    
            $table->string('tel_conseiller');
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
        Schema::dropIfExists('_conseiller');
    }
}
