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

    // Definition des attributs
    protected $fillable =['nom','description','date_debut','date_fin'];/*
    On utilise la propriete fillable pour specifier les attributs pouvant
    etre massivement assignes lors de la creation ou de la mise a jour de
    l'instance du modele (cela va nous aider a optimiser notre code dans
    la creation ou la mise a jour d'une instance de notre modele au lieu
    d'utiliser plustot des attributs separer)*/

    use HasFactory;
}
