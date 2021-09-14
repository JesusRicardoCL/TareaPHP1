<?php
#CALCULADORA

$enviado=false;

if(isset($_GET["operacion"])){
    $enviado=true;
    $r = $_GET;

    $operacion = $r["operacion"];
    $numero1 = $r["numero1"];
    $numero2 = $r["numero2"];

    switch($operacion) {
        case 'Suma':
            $resultado =  $numero1 + $numero2;
            break;
        case 'Resta':
            $resultado =  $numero1 - $numero2;
            break;
        case 'Multiplicacion':
            $resultado =  $numero1 * $numero2;
            break;
        case 'Division':
            $resultado =  $numero1 / $numero2;
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
    <title>Calculadora</title>
    <style>
    h1 {text-align: center;}
    </style>
</head>
<body>

<h1> Calculadora </h1>

<form method="get" action="tarea2_1.php">

<label for="numero1">Numero 1: </label>
<input type="text" name="numero1">
<br>

<label for="numero2">Numero 2: </label>
<input type="text" name="numero2">
<br>

<label for="operacion">Selecciona el tipo de operacion: </label>
<select name="operacion">
<option>Suma</option>
<option>Resta</option>
<option>Multiplicacion</option>
<option>Division</option>
</select>
<br>

<button type="submit">Enviar</button>


</form>

<?php if($enviado){?>

<br>
<h2>Resultado: <?= $resultado; ?> </h2>

<?php } ?>




    
</body>
</html>