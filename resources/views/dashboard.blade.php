
<link rel="icon" type="image/png" href="{{ asset('logo/favicon.png')}}">
<title>Mauri - Developpeur | Sortir - Acceil</title>

<x-app-layout>
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
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
        </h2>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <p>Si vous-étez un adminstrateur vous pouvez revenir a la page d'Acceil d'ici !</p>
                <br>
            </div>
        <x-primary-button class="ms-3 custom-button" >
            
        <a href=" {{ route('dashboardpage')}}"><i data-feather="log-in"></i>ACCUEIL</a>
       </x-primary-button>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    {{ __("Tu es connecté!") }}

                    
                </div>
            </div>
            <br>
            <div>
                <img width="1400px" src="{{asset ('logo/dash.png')}}" alt="">
            </div>
        </div>
        
    </div>
</x-app-layout>
