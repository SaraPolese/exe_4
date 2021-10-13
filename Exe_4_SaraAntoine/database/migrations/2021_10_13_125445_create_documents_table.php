<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            // je crée mes champs
           $table->id();
           $table->timestamps();
           $table->enum('type', ['pv', 'fiche_patient']);
           $table->string('description');
           $table->string('chemin');
           $table->unsignedInteger('taille');

           // je crée mes relation
           $table->unsignedBigInteger('personne_id');
           $table->foreign('personne_id')
                   ->references('id')
                   ->on('personnes')
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
        Schema::dropIfExists('documents');
    }
}
