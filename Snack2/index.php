<!--
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non 
conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga
un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.

-->


<?php

$name = key_exists("name", $_GET) ? $_GET ["name"] : "";

$email = key_exists("email", $_GET) ? $_GET ["email"] : "";

$age = key_exists("age", $_GET) ? $_GET ["age"] : "";

$emailValida = "false";

$chiocciola = strstr($email, "@");

$punto = strstr($email, ".");

$nomeValido = "false";

$etaValida = "false";

var_dump($_GET);
if ($chiocciola & $punto){
    $emailValida = "true";
};

if (strlen($name) > 3 ){
    $nomeValido = "true";
};

if (is_numeric($age) ){
    $etaValida = "true";
};


echo $emailValida;

echo $nomeValido;

echo $etaValida;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">

    <?php if($emailValida || $nomeValido || $etaValida !== "true") {?>

    <form>
  <div class="col-md-4">
    <label class="form-label">First name</label>
    <input type="text" class="form-control <?php echo $nomeValido != "true" ? 'is-invalid' : ''?>" name="name"  value="<?php echo $name ?>" required>
    <div class="invalid-feedback">
      Inserire un minimo di 3 caratteri
    </div>
  </div>
  <div class="col-md-4">
    <label class="form-label">Email</label>
    <input type="text" class="form-control <?php echo $emailValida != "true" ? 'is-invalid' : ''?> " name="email" value="<?php echo $email ?>" required>
    <div class="invalid-feedback">
      Controllare se corretto l'inserimento
    </div>
  </div>
  <div class="col-md-4">
    <label class="form-label">Età</label>
    <input type="text" class="form-control <?php echo $etaValida != "true" ? 'is-invalid' : ''?>" name="age" value="<?php echo $age ?>" required>
    <div class="invalid-feedback">
      Inserire un numero
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

<?php } ?>
</body>
</html>


