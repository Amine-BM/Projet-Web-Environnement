<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id('idVideo');
            $table->integer('vue');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->mediumText('commentaire');
            
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
        Schema::dropIfExists('videos');
    }
}
