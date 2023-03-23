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
     * Affiche le formulaire de création d'un nouveau projets.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Enregistre un nouveau projets dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required',
        ]);

        $projet = Projet::create($validatedData);

        return redirect('/projets')->with('success', 'Projet enregistré avec succès.');
    }

    /**
     * Affiche les détails d'un projets.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::findOrFail($id);

        return view('projets.show', compact('projet'));
    }

    /**
     * Affiche le formulaire de modification d'un projets existant.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projet = Projet::findOrFail($id);

        return view('projets.edit', compact('projet'));
    }

    /**
     * Met à jour un projets existant dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required',
        ]);

        $projet = Projet::findOrFail($id);
        $projet->update($validatedData);

        return redirect('/projets')->with('success', 'Projet mis à jour avec succès.');
    }

    /**
     * Supprime un projets existant de la base de données.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();

        return redirect('/projets')->with('success', 'Projet supprimé avec succès.');
    }
}
