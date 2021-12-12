<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableTypeappartementTypepiece extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeappartement_typepiece', function (Blueprint $table) {
            $table->unsignedBigInteger('refTypeAppartement');
            $table->foreign('refTypeAppartement')->references('idTypeAppartement')->on('type_appartements');
            
            $table->unsignedBigInteger('refTypePiece');
            $table->foreign('refTypePiece')->references('idTypePiece')->on('type_pieces');

            $table->integer('nombreTypePiece');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_typeappartement_typepiece');
    }
}
