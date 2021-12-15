
@extends('dashboard')
@section('content')
    <h1>J'ajoute un appareil à ma pièce</h1>
    @if ($pieces==null)
        <h2>Vous n'avez aucune pièce enregistrée</h2>
        <h3>Veuillez d'abord ajouter une pièce pour pouvoir ajouter un appareil</h3>
    @else
        <SELECT name="piece" size="1">
            @foreach ($pieces as $app)
                <OPTION id="{{$app->idPiece}}" >{{$app->idPiece}}
            @endforeach
        </SELECT>
        <h2>Vous pouvez ajouter une pièce</h2>
    @endif
    <x-guest-layout>
        <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('welcome') }}">
                    <img class="block h-12 w-full rounded rounded-full" src="/images/dragon.jpg" alt="">
                </a>
            </div>
        </x-slot>
        <x-jet-validation-errors class="mb-4" />
           

        <form method="POST" action="{{ route('storeAppareil') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="Libelle" />
                <x-jet-input id="libele" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="name" value="Piece" />
                <x-jet-input id="pice" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="name" value="Type Appareil" />
                <x-jet-input id="typeAppareil" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="name" value="Consommation" />
                <x-jet-input id="conso" class="block mt-1 w-full" type="number" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="name" value="Emission" />
                <x-jet-input id="emis" class="block mt-1 w-full" type="number" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
            
            <label for="name">Emplacement</label>
             <textarea id="emplacement" name="name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
               ></textarea>
             </div> 

            <div class="flex items-center justify-start mt-4">

                <a class="mr-40" href="{{route('dashboard')}}"> Retour </a>
                <x-jet-button class="ml-4">
                    enregistrer
                </x-jet-button>
            </div>
        </form>
        </x-jet-authentication-card>
    </x-guest-layout>
@endsection
