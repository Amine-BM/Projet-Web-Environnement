<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppareilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appareils', function (Blueprint $table) {
            $table->id('idAppareil');
            $table->string('libelle');
            $table->float('consommationHeure');
            $table->float('emissionHeure');
            $table->mediumText('emplacement');

            $table->unsignedBigInteger('refPiece');
            $table->foreign('refPiece')->references('idPiece')->on('pieces');
            
            $table->unsignedBigInteger('refTypeAppareil');
            $table->foreign('refTypeAppareil')->references('idTypeAppareil')->on('type_appareils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appareils');
    }
}
