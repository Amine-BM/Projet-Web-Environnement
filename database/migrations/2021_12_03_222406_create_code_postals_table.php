<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodePostalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_postals', function (Blueprint $table) {
            $table->id('idCodePostal');
            $table->integer('numero');

            $table->unsignedBigInteger('refVille');
            $table->foreign('refville')->references('idVille')->on('villes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('code_postals');
    }
}
