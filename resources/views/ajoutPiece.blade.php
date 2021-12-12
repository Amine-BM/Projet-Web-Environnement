@extends('dashboard')
@section('content')
    <h1>J'ajoute une pièce à mon appartement</h1>
    @if ($appartement==null)
        <h2>Vous n'avez aucun appartement enregistré</h2>
        <h3>Veuillez d'abord ajouter un appartement pour pouvoir ajouter une pièce</h3>
    @else
        <SELECT name="appartement" size="1">
            @foreach ($appartement as $app)
                <OPTION id="{{$app->idAppartement}}" >{{$app->numeroBoite}}
            @endforeach
        </SELECT>
        <h2>Vous pouvez ajouter un appartement</h2>
    @endif
@endsection