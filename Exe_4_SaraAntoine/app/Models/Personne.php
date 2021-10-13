<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    //Fillable
    protected $fillable = ['nom', 'prenom', 'mail'];


    //Liaison chef de projet
    public function projets()
    {
        return $this->hasMany(Projet::class);
    }


    //Liaison auteur document
    public function documents()
    {
        return $this->hasMany(Document::class);
    }


    //Liaison thérapeute
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
