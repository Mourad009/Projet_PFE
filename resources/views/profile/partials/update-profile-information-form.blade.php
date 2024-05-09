<link rel="icon" type="image/png" href="{{ asset('logo/favicon.png')}}">
<section>
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
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Assurer que vous étez faire le mis à jour de votre profile") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Votre email inverifier.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Clicker ici pour envoyer la verifiction de notre email') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Nouvau verification link a été envoyé a votre email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="ms-3 custom-button">{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Enregistrer.') }}</p>
            @endif
        </div>
    </form>
</section>
