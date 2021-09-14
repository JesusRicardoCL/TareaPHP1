<?php
#ELIGE UNA PUERTA
$enviado=false;

if(isset($_GET["puerta"])){
    $enviado=true;
    $r = $_GET;

    $puerta = $r["puerta"];

    switch($puerta) {
        case 'Puerta 1':
            $resultado = "una piedra";
            break;
        case 'Puerta 2':
            $resultado =  "una cabra";
            break;
        case 'Puerta 3':
            $resultado =  "un carro del año";
            break;
        case 'Puerta 4':
            $resultado =  "nada :(";
            break;

    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elige una puerta</title>
    <style>
    h1 {text-align: center;}
    </style>
</head>
<body>

<h1> Elige una puerta </h1>

<form method="get" action="tarea2_2.php">

<label for="puerta">Seleccione una puerta: </label>
<select name="puerta">
<option>Puerta 1</option>
<option>Puerta 2</option>
<option>Puerta 3</option>
<option>Puerta 4</option>
</select>
<br>

<button type="submit">Enviar</button>


</form>

<?php if($enviado){?>

<br>
<h2>Usted se ha ganado <?= $resultado; ?> </h2>

<?php } ?>




    
</body>
</html>