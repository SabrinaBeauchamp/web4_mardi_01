@extends('mesLayouts.layout')

@section('titre')
    Agrotouristique
@endsection

@section('contenu')
<h2>Agrotouristique</h2>
    <nav>
        <ul>
            <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
            <li><a href="{{route('.evenements.index')}}">Évènements</a></li>
            <li><a href="">Connexion</a></li>
        </ul>
    </nav>
    
   
@endsection