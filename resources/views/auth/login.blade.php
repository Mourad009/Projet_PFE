<link rel="icon" type="image/png" href="{{ asset('logo/favicon.png')}}">


<x-guest-layout class="container">

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
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
               
                
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('mot de passe oublier?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 custom-button" >
                {{ __('Connecter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
