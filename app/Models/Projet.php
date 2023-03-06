<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table ='projets';

    /*Definition des fonctions Eloquent pour la relation
    'un a plusieur entre Projet et Tache*/
    public function taches(){
        //la methode hasMany() pour dire que chaque projet a plusieurs taches associes
        return $this->hasMany(Tache::class);
        /*Des lors sur une instance de Projet on peut reccuperer
        les taches associes aux projets*/
    }
    use HasFactory;
}
