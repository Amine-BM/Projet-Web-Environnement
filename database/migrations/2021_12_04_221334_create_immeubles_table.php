<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmeublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immeubles', function (Blueprint $table) {
            $table->id('idImmeuble');
            $table->integer('nombreEtage');
            $table->integer('nombreAppartement');
            $table->integer('anneeConstruction');
            $table->string('nom');
            $table->float('evalutationEcoImmeuble');
            $table->string('nomRue');
            $table->integer('numeroMaison');

            $table->unsignedBigInteger('refVille');
            $table->foreign('refVille')->references('idVille')->on('villes');

            $table->unsignedBigInteger('RefDegreIsolation');
            $table->foreign('RefDegreIsolation')->references('idDegreIsolation')->on('degre_isolations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immeubles');
    }
}
