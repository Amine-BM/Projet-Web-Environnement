<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function (Blueprint $table) {
            $table->id('idPiece');
            $table->string('libelle');

            $table->unsignedBigInteger('refAppartement');
            $table->foreign('refAppartement')->references('idAppartement')->on('appartements');
            
            $table->unsignedBigInteger('refTypePiece');
            $table->foreign('refTypePiece')->references('idTypePiece')->on('type_pieces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pieces');
    }
}
