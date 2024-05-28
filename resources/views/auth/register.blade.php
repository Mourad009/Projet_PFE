<link rel="icon" type="image/png" href="{{ asset('logo/favicon.png')}}">
<title> Mauri - Developpeur | Registre </title>

<x-guest-layout>

<style type="text/css">
    
    .ms-3 {
    margin-left: 1rem; /* Ajoute une marge à gauche */
        }

        .custom-button {
            /* Vos styles personnalisés pour le bouton */
            background-color: blue;
            color: white; /* Couleur du texte */
            border: none; /* Supprimer les bordures */
            padding: 10px 24px; /* Rembourrage */
            text-align: center; /* Alignement du texte */
            text-decoration: none; /* Supprimer la décoration du texte */
            display: inline-block; /* Affichage en ligne */
            font-size: 16px; /* Taille de police */
            cursor: pointer; /* Curseur pointeur */
            border-radius: 5px; /* Bordure arrondie */
        }
        .custom-button:hover {
            background-color: blue; /* Couleur de fond au survol */
        }
        


</style>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Déja enregistré?') }}
            </a>

            <x-primary-button class="ms-3 custom-button">
                {{ __('Registrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
