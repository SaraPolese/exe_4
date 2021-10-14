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

      
        //Insert documents
        $documents = Document::factory()->count(10)->make()
            ->each(function($document) use ($personnes) {
            $document->personne_id = $personnes->random()->id;
            $document->save();
            });
        

        //Insert projets
        $projets = Projet::factory()->count(10)->make()
            ->each(function($projet) use ($personnes, $documents) {
            $projet->personne_id = $personnes->random()->id;
            $projet->document_id = $documents->random()->id;
            $projet->save();
        });


        //Insert therapies
        $therapies = Therapie::factory()->count(10)->make()
            ->each(function($therapie) use ($documents) {
            $therapie->document_id = $documents->random()->id;
            $therapie->save();
        });

        //Insert consultations
        $consultations = Consultation::factory()->count(10)->make()
            ->each(function($consultation) use ($personnes, $therapies) {
            $consultation->personne_id = $personnes->random()->id;
            $consultation->therapie_id = $therapies->random()->id;
            $consultation->save();
        });
        

    }
}
