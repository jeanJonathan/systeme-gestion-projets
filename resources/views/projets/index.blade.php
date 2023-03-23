@extends('layouts.app')

@section('content')
    <h1>Liste des projets</h1>
    <ul>
        @foreach($projets as $projet)
            <li>
                <!--On presente un lien vers la page de detail du projet-->
                <a href="{{ route('$projets.show',$projet->id) }}">
                    {{$projet->description}}
            </li>
                <!--On ajoute un lien pour creer un nouveau projet-->
            <a href="{{ route('projets.create') }}">Créer un nouveau projet</a>
        @endforeach
    </ul>
