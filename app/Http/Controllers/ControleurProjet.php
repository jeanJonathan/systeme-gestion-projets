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

    /**
     * Affiche le formulaire de création d'un nouveau projet.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Enregistre un nouveau projet dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


}
