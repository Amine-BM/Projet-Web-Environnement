<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableUserAppartement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_appartement', function (Blueprint $table) {
            $table->unsignedBigInteger('refUtilisateur');
            $table->foreign('refUtilisateur')->references('id')->on('users');
            
            $table->unsignedBigInteger('refAppartement');
            $table->foreign('refAppartement')->references('idAppartement')->on('appartements');

            $table->date('dateDebut');
            $table->date('dateFin')->nullable();
            $table->integer('nombreHabitant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_user_appartement');
    }
}
