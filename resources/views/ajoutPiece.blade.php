<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="Libelle" value="Libelle" />
                <x-jet-input id="Libelle" class="block mt-1 w-full" type="text" name="Libelle" :value="old('Libelle')" required autofocus autocomplete="Libelle" />
            </div>

            <div>
                <x-jet-label for="Numéro Appartement" value="Numéro Appartement" />
                <x-jet-input id="Numéro Appartement" class="block mt-1 w-full" type="number" name="Numéro Appartement" :value="old('Numéro Appartement')" required autofocus autocomplete="name" />
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
