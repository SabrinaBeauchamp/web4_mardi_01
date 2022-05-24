@extends('mesLayouts.layout')

@section('titre')
Évènements - {{$evenement->nom}}
@endsection

@section('contenu')
<h2>Évènement {{$evenement->nom}}</h2>
    <form action="{{route('evenements.update', $evenement)}}" method="post">
        @include('evenements.form')
        @include('villes.radio', ['checked'=>$evenement->ville->id])
        <x-champ-button type="submit" titre="'Modifier l'évènement'"></x-champ-button>
    </form>
    <div class="options">
        <x-champ-lien href="{{route('evenements.index')}}" titre="Retour aux évènements"></x-champ-lien>
    </div>
@endsection