@extends('layouts.connexion')
@section('content')
<div class="p-4">
    <h1 class="title">Inscription</h1>
    <form action="{{route('handleInscription')}}" method="post">
        @csrf 
        {{-- vérifie via un token si les informations viennet de nous, si pas ça laravel n'accepte pas les infos du form --}}
        <div class="mb-4 flex flex-row justify-between">
            <div class="w-12/25">
                <label for="lastname" class="labelconnect">Nom*</label>
                <input type="text" id="lastname" name="lastname" class="inputconnect">
            </div>
            <div class="w-12/25">
                <label for="firstname" class="labelconnect">Prénom*</label>
                <input type="text" id="firstname" name="firstname" class="inputconnect"> 
            </div>
        </div>
        <div class="mb-4">
            <label for="login" class="labelconnect">Login*</label>
            <input type="text" id="login" name="login" class="inputconnect">
        </div>
        <div class="mb-4">
            <label for="email" class="labelconnect">Email*</label>
            <input type="email" id="email" name="email" class="inputconnect">
        </div>
        <div class="mb-4">
            <label for="password" class="labelconnect">Mot de Passe*</label>
            <input type="password" id="password" name="password" class="inputconnect">
        </div>
        <div class="mb-4">
            <label for="age" class="labelconnect">Date de naissance*</label>
            <input type="date" id="age" name="age" class="inputconnect">
        </div>
        <div class="mb-4">
            <label for="tel" class="labelconnect">Téléphone*</label>
            <input type="number" id="tel" name="tel" class="inputconnect">
        </div>
        <div class="mb-4 flex flex-row justify-center">
            <div class="mx-9">
                <label for="locataire" class="text-gray-700 mb-1">Locataire*</label>
                <input type="checkbox" id="locataire" name="locataire" class="rounded-2xl">
            </div>
            <div class="mx-9">
                <label for="proprietaire" class="text-gray-700 mb-1">Proprietaire*</label>
                <input type="checkbox" id="proprietaire" name="proprietaire" class="rounded">
            </div>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn">S'inscrire</button>
            {{-- <button type="button" onclick="window.location='{{route('acceuil')}}'">Inscrivez-vous</button> --}}
        </div>
    </form>
</div>
@endsection