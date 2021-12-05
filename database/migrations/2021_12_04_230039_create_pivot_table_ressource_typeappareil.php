<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableRessourceTypeappareil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressource_typeappareil', function (Blueprint $table) {
            $table->unsignedBigInteger('refTypeAppareil');
            $table->foreign('refTypeAppareil')->references('idTypeAppareil')->on('type_appareils');
            
            $table->unsignedBigInteger('refRessource');
            $table->foreign('refRessource')->references('idRessource')->on('ressources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_ressource_typeappareil');
    }
}
