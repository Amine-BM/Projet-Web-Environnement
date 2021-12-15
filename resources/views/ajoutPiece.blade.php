@extends('dashboard')
@section('content')
    <h1>J'ajoute une pièce à mon appartement</h1>
    @if ($appartement==null)
        <h2>Vous n'avez aucun appartement enregistré</h2>
        <h3>Veuillez d'abord ajouter un appartement pour pouvoir ajouter une pièce</h3>
    @else
        <h2>Vous pouvez ajouter un appartement</h2>
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
           

            <form method="POST" action="{{ route('storePiece') }}">
                @csrf

                <div>
                    <x-jet-label for="Libelle" value="Libelle" />
                    
                    <x-jet-input id="Libelle" class="block mt-1 w-full" type="text" name="Libelle" :value="old('Libelle')" required autofocus autocomplete="Libelle" />
                </div>

                <div>
                    <label>Numéro Appartement</label>
                     <SELECT name="appartement" size="1">
                     @foreach ($appartement as $app)
                        <OPTION id="{{$app->idAppartement}}" >{{$app->numeroBoite}}
                     @endforeach
                     </SELECT>
                </div>

                <div>
                    <x-jet-label for="name" value="Type pièce" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="mr-40" href="{{route('dashboard')}}">
                        Retour
                    </a>

                    <x-jet-button class="ml-4">
                        enregistrer
                    </x-jet-button>

                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
@endsection
