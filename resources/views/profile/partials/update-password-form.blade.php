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
            {{ __('Modifier le mot de passe') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Assurer que vous étez utlisé une mot de passe difficule') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Votre mot de passe')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Nouveau mot de passe')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirme mot de passe')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="ms-3 custom-button">{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'password-updated')
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
