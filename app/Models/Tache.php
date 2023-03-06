<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $table = 'taches';

    /*Definition des fonctions Eloquent pour la relation
    'un a plusieur inverse' dans la table enfant Tache*/
    public function utilisateur(){
        return $this->belongsTo(Utilisateur::class,'utilisateur_id');
    }
    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id');
    }
    protected $fillable =['nom','description','date_debut','date_fin'];
    use HasFactory;
}
