<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableSubstancesTypeappareil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('substances_typeappareil', function (Blueprint $table) {
            $table->unsignedBigInteger('refTypeAppareil');
            $table->foreign('refTypeAppareil')->references('idTypeAppareil')->on('type_appareils');
            
            $table->unsignedBigInteger('refSubstance');
            $table->foreign('refSubstance')->references('idSubstance')->on('substances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_substances_typeappareil');
    }
}
