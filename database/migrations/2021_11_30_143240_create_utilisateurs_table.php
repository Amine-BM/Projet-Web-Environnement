<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('idUtilisateur');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateDeNaissance');
            $table->string('genre');
            $table->string('mail');
            $table->integer('numTel');
            $table->boolean('etat');
            $table->string('motDePasse');
            $table->boolean('admin');
            $table->string('login');
            $table->string('proprietaire');
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
        Schema::dropIfExists('utilisateurs');
    }
}
