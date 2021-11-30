@extends('layouts.connexion')
@section('content')
    <div class="p-4">
        <h1 class="title">Connexion</h1>
        <form action="{{route('handleConnexion')}}" method="post">
            @csrf 
            {{-- vérifie via un token si les informations viennet de nous, si pas ça laravel n'accepte pas les infos du form --}}
            <div class="mb-4">
                <label for="username" class="labelconnect">Email/Login</label>
                <input type="text" id="username" name="username" class="inputconnect">
            </div>
            <div class="mb-4">
                <label for="password" class="labelconnect">Mot de Passe</label>
                <input type="password" id="password" name="password" class="inputconnect">
            </div>
            <div class="flex justify-between">
                <button type="submit" class="btn">Se connecter</button>
                <a class="link" id="inscription" href="{{route('inscription')}} ">Inscrivez-vous</a>
                {{-- <button type="button" onclick="window.location='{{route('acceuil')}}'">Inscrivez-vous</button> --}}
            </div>
        </form>
    </div>

@endsection