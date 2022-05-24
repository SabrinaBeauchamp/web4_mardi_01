@extends('mesLayouts.layout')

@section('titre')
    Évènements - {{$evenements->nom}}
@endsection

@section('contenu')
<h2>Voulez-vous supprimer ce forfait {{$evenements->nom}}</h2>
    <form action="{{route('evenements.destroy', $evenements)}}" method="post">
        @csrf
        <x-champ-button-delete type="submit" titre="Suprimer l'évènement"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('evenements.index')}}" titre="Retour aux évènements"></x-champ-lien>
    </div>
@endsection