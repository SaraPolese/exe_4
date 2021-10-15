<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'type', 'description', 'chemin', 'taille', 'auteur'];

    //Liaison auteur
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    //Liaison fiche patient
    public function therapies()
    {
        return $this->hasMany(Therapie::class);
    }

    public function projets() 
    {
        return $this->hasMany(Projet::class);
    }
}
