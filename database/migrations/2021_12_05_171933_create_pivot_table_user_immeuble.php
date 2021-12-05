<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableUserImmeuble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_immeuble', function (Blueprint $table) {
            $table->unsignedBigInteger('refUtilisateur');
            $table->foreign('refUtilisateur')->references('id')->on('users');
            
            $table->unsignedBigInteger('refImmeuble');
            $table->foreign('refImmeuble')->references('idImmeuble')->on('immeubles');

            $table->date('dateDebut');
            $table->date('dateFin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_user_immeuble');
    }
}
