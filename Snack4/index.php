<!-- 
    ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->
<?php

$arrayNumerico = [];

while (count($arrayNumerico) < 15){
    $numeriRandom = rand(1, 100);
    if (!in_array($numeriRandom, $arrayNumerico)){
        $arrayNumerico[] = $numeriRandom;
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>title</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="d-flex justify-content-center">
                <h1><i class="fa-solid fa-arrow-down"></i>-ARRAY CASUALE-<i class="fa-solid fa-arrow-down"></i></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col">
            <div class="d-flex justify-content-center">
                <?php for ($i = 0; $i < count($arrayNumerico); $i++) { ?>
                    <div class="text-center p-3 text-bg-danger">
                        <?php echo $arrayNumerico[$i] ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>