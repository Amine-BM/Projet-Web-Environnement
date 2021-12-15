
@extends('dashboard')
@section('content')
    <h1>J'ajoute un appareil à ma pièce</h1>
    @if ($pieces==null)
        <h2>Vous n'avez aucune pièce enregistrée</h2>
        <h3>Veuillez d'abord ajouter une pièce pour pouvoir ajouter un appareil</h3>
    @else
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
                <x-jet-input id="libelle" class="block mt-1 w-full" type="text" name="libelle" :value="old('libelle')" required autofocus autocomplete="libelle" />
            </div>

            <div>
                <x-jet-label for="name" value="Consommation" />
                <x-jet-input id="conso" class="block mt-1 w-full" type="number" name="conso" :value="old('conso')" required autofocus autocomplete="conso" />
            </div>

            <div>
                <x-jet-label for="name" value="Emission" />
                <x-jet-input id="emis" class="block mt-1 w-full" type="number" name="emis" :value="old('emis')" required autofocus autocomplete="emis" />
            </div>

            <div>
            
            <label for="name">Emplacement</label>
             <textarea id="emplacement" name="emplacement" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
               ></textarea>
             </div> 

             <div>
                <label class="mt-4" for="">liste des pièces par appartement</label>
                <SELECT name="piece" size="1">
                   @foreach ($pieces as $p1)
                       @foreach ($p1 as $p2)
                           <OPTION id="{{$p2->idPiece}}" >{{"Appartemnt," . $p2->refAppartement . ",Piece," . $p2->idPiece}}
                       @endforeach
                   @endforeach
               </SELECT>
             </div>

             <div class="flex flex-c">
                 <div>
                    <label class="mt-4" for="">liste des types appareils</label>
                 </div>
                
                 <div>
                    <SELECT name="type" size="1">
                        @foreach ($typeAppareil as $tp)
                             <OPTION id="{{$tp->idTypeAppareil}}" >{{$tp->idTypeAppareil}}
                        @endforeach
                    </SELECT>
                 </div>

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
