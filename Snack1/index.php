<!--
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
-->



<?php
    $listaSquadre = [
        [
            "squadraCasa" => "Olimpia",
            "squadraOspite" => "Milano",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
        [
            "squadraCasa" => "Macedonia",
            "squadraOspite" => "Torino",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
        [
            "squadraCasa" => "Verona",
            "squadraOspite" => "Rimini",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
        [
            "squadraCasa" => "Creta",
            "squadraOspite" => "Danimarca",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
        [
            "squadraCasa" => "Palermo",
            "squadraOspite" => "Toronto",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
        [
            "squadraCasa" => "Venezia",
            "squadraOspite" => "Migonos",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
        [
            "squadraCasa" => "Roma",
            "squadraOspite" => "Liverpool",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
        [
            "squadraCasa" => "Pescara",
            "squadraOspite" => "Treviso",
            "punteggioCasa" => rand(1, 150),
            "punteggioOspite" => rand(1, 150),
        ],
    ];
    
    $squadraCorente = [];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="d-flex justify-content-center">
                <h1><i class="fa-solid fa-arrow-down"></i>-CALENDARIO QUALIFICAZIONI-<i class="fa-solid fa-arrow-down"></i></h1>
            </div>
        </div>
    </div>
</div>



<div class="container mt-5">
    <div class="row row-cols-4">

    <?php

        for ($i = 0; $i < count($listaSquadre); $i++){
            $squadraCorente = $listaSquadre[$i];


    ?>

        <div class="col">
            <div class="card text-bg-warning mb-3" style="max-width: 20rem;">
                <div class="card-header text-white text-center">MATCH</div>
                <div class="card-body">
                    <h5 class="card-title"><strong class="text-white"> SQUADRE : </strong><?php echo $squadraCorente["squadraCasa"] . " - " . $squadraCorente["squadraOspite"] ?></h5>
                    <p class="card-text"><strong class="text-white"> PUNTEGGIO : </strong><?php echo $squadraCorente["punteggioCasa"]. " " . "|" . " " .$squadraCorente["punteggioOspite"] ?></p>
                </div>
            </div>
        </div>


    <?php } ?>
    </div>
</div>

</body>
</html>