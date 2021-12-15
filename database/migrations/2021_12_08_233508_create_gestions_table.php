<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestions', function (Blueprint $table) {
            $table->id('idGestion');
            $table->timestamp('heureDebut')->nullable();
            $table->timestamp('heureFin')->nullable();

            $table->unsignedBigInteger('refAppareil');
            $table->foreign('refAppareil')->references('idAppareil')->on('appareils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestions');
    }
}
