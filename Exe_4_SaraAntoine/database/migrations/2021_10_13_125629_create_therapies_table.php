<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapies', function (Blueprint $table) {
           // je crée mes champs
           $table->id();
           $table->timestamps();
           $table->string('sujet');
           $table->float('tarif', 8,2);
           $table->tinyInt('statut',1);


            // je crée mes relation
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')
                   ->references('id')
                   ->on('documents')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('therapies');
    }
}
