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

@foreach ($formations as $formation)
    
    <h1>{{ $formation->nom }}</h1>

    <h1>{{ $formation->presentation_du_metier }}</h1>
    <h1>{{ $formation->objectifs_de_la_formation }}</h1>
    <h1>{{ $formation->prerequis }}</h1>
    <h1>{{ $formation->programme }}</h1>
    <h1>{{ $formation->certification }}</h1>
    <h1>{{ $formation->debouches }}</h1>
    <h1>{{ $formation->passerelles }}</h1>
    <h1>{{ $formation->equivalences }}</h1>
    <h1>{{ $formation->suite_de_parcours_possibles }}</h1>
    <h1>{{ $formation->date_debut }}</h1>
    <h1>{{ $formation->date_fin }}</h1>

@endforeach

</body>
</html>