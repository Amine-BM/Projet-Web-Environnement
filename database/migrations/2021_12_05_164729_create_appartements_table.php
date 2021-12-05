<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->id('idAppartement');
            $table->integer('surface');
            $table->integer('nombrePiece');
            $table->integer('numeroBoite');

            $table->unsignedBigInteger('refImmeuble');
            $table->foreign('refImmeuble')->references('idImmeuble')->on('immeubles');
            
            $table->unsignedBigInteger('refTypeAppartement');
            $table->foreign('refTypeAppartement')->references('idTypeAppartement')->on('type_appartements');
            
            $table->unsignedBigInteger('RefDegreSecurite');
            $table->foreign('RefDegreSecurite')->references('idDegreSecurite')->on('degre_securites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appartements');
    }
}