<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            // je crée mes champs
           $table->id();
           $table->timestamps();
           $table->date('date');
           $table->string('methode');
           $table->string('description');

            // je crée mes relation
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')
                   ->references('id')
                   ->on('personnes')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');

            $table->unsignedBigInteger('therapie_id');
            $table->foreign('therapie_id')
                    ->references('id')
                    ->on('therapies')
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
        Schema::dropIfExists('consultations');
    }
}
