<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapie extends Model
{
    use HasFactory;
    protected $fillable = ['sujet', 'tarif', 'statut'];

    //Liaison thérapie de consultation
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    //Liaison fiche patient
    public function document()
    {
        return $this->belongsTo(Document::class);
    }

   
}
