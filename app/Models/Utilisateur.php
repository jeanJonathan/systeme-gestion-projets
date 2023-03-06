<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table ='utilisateurs'; // De cette facon, Eloquent saura qu'il s'agit de la
    // la table utilisateurs dans la base de donnees

    /*Definition des fonctions Eloquent pour la relation
    'un a plusieur entre Utilisateur et Tache*/
    public function tache(){
        return $this->hasMany(Tache::class);
    }
    use HasFactory;
}
