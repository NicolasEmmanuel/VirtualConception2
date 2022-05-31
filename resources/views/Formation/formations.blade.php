<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="logo.png" type="images/png" />
</head>
<body>

<h2>Liste des formations en Informatique</h2>

<!-- Nav-Bar pour les catégories de formations -->



<!-- Boucle des formations -->
@foreach ($formations as $formation)

    {{ $formation->nom }}
    {{ $formation->duree }}
    {{ $formation->description }} <br><br>

    <div class="flex items-center">
    <a href="{{ route('detail_formation', $formation->nom) }}" style="font-size:25px">
        Détails
        <i class="fa fa-search fa-fw"
        aria-hidden="false" title="Voir le détail de la formation">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                class="h-fit w-fit" 
                viewBox="0 0 -3 -2" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 
                100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 
                4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" 
                clip-rule="evenodd" />
            </svg>
        </i>
    </a>
    </div>

@endforeach

</body>
</html>