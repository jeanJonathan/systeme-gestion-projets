<?php

namespace App\Http\Controllers;

//Pour utilise le modele Projet pour acceder a la
//table des projets dans la base de donnees
use App\Models\Projet;
use Illuminate\Http\Request;

class ControleurProjet extends Controller
{
    /**
     * Affiche la liste de tous les projets.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();

        return view('projets.index', compact('projets'));
    }

}
