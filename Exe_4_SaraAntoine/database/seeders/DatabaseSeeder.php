<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Document;
use App\Models\Personne;
use App\Models\Projet;
use App\Models\Therapie;
use App\Models\Consultation;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Info personnes
        $personnes = Personne::factory()->count(20)->create();

      
        $documents = Document::factory()->count(10)->make()
            ->each(function($document) use ($personnes) {
            $document->personne_id = $personnes->random()->id;
            $document->save();
            });
        

        
        $projets = Projet::factory()->count(10)->make()
            ->each(function($projet) use ($personnes, $documents) {
            $projet->personne_id = $personnes->random()->id;
            $projet->document_id = $documents->random()->id;
            $projet->save();
        });
        

    }
}
