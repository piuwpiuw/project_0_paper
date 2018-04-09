<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeunes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_conseiller')->nullable();
            $table->string('mail_jeune')->nullable();
            $table->string('password_jeune')->nullable();
            $table->string ('nom')->nullable();
            $table->string ('prenom')->nullable();
            $table->integer ('age')->nullable();
            $table->date ('date_naissance')->nullable();
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
        Schema::dropIfExists('jeune');
    }
}
