<?php
#PERSONA MAYOR
$enviado=false;

if(isset($_GET["persona1"])){
    $enviado=true;
    $r = $_GET;

    $persona1 = $r["persona1"];
    $persona2 = $r["persona2"];
    $edad1 = $r["edad1"];
    $edad2 = $r["edad2"];

    if ($edad1 == $edad2){
        $resultado = $persona1." y ".$persona2." tienen la misma edad";
    }elseif($edad1 > $edad2){
        $resultado = $persona1." es mayor que ".$persona2;
    }else{
        $resultado = $persona2." es mayor que ".$persona1;
    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona Mayor</title>
    <style>
    h1 {text-align: center;}
    </style>
</head>
<body>

<h1> Persona Mayor </h1>

<form method="get" action="tarea2_3.php">

<label for="persona1">Nombre de la persona: </label>
<input type="text" name="persona1">

<label for="edad1">Edad: </label>
<input type="number" name="edad1">

<br>

<label for="persona2">Nombre de la persona: </label>
<input type="text" name="persona2">

<label for="edad2">Edad: </label>
<input type="number" name="edad2">
<br>



<br>

<button type="submit">Enviar</button>


</form>

<?php if($enviado){?>

<br>
<h2> <?= $resultado; ?> </h2>

<?php } ?>




    
</body>
</html>