<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    //Fillable
    protected $fillable = ['nom', 'date_debut', 'date_fin', 'etape'];


    //Liaison chef de projet
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    public function Documents()
    {
        return $this->hasMany(Document::class);
    }
}
