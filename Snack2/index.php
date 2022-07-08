<!--
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non 
conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga
un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.

-->


<?php

$name = key_exists("name", $_GET) ? $_GET ["name"] : false;

$email = key_exists("email", $_GET) ? $_GET ["email"] : false;

$age = key_exists("age", $_GET) ? $_GET ["age"] : false;

$emailValida = "true";

$chiocciola = strstr($email, "@");

$punto = strstr($email, ".");

var_dump($_GET);

if (!$chiocciola || !$punto){
    $emailValida = "false";
}

echo $emailValida;
?>