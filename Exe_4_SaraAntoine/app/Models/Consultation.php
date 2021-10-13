<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = ['date', 'methode', 'description'];


    //Liaison thérapeute
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    //Liaison thérapie de consultation
    public function therapie()
    {
        return $this->belongsTo(Therapie::class);
    }
}
