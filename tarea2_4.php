

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
    h1 {text-align: center;}
    </style>
</head>
<body>

<h1> Formulario </h1>

<form method="post" action="tarea2_4.php">

<label for="nombre">Nombre: </label>
<input type="text" name="nombre">
<br>

<label for="apellido">Apellido: </label>
<input type="text" name="apellido">
<br>

<label for="ciudad">Ciudad: </label>
    <select name="ciudad">
        <option>Guaymas</option>
        <option>Hermosillo</option>
        <option>Obregon</option>
        <option>Empalme</option>
        <option>Nogales</option>
        <option>San Carlos</option>
        <option>Navojoa</option>
        <option>Huatabampo</option>
    </select>
<br>

<label for="edad">Edad: </label>
<input type="number" name="edad" min="0" max="200">
<br>

<label for="telefono">Telefono: </label>
<input type="text" name="telefono">
<br>

<label for="correo">Correo: </label>
<input type="text" name="correo">
<br>

<label for="estadoCivil">Estado civil: </label> <br>
<input type="radio" name="estadoCivil" value="Soltero"><label for="estadoCivil"> Soltero </label> <br>
<input type="radio" name="estadoCivil" value="Casado"><label for="estadoCivil"> Casado </label> <br>





<button type="submit">Enviar</button>


</form>
    
<?php
#FORMULARIO
$enviado=false;

if(isset($_POST["nombre"])){
    echo "<p>"."Nombre: ".$_POST['nombre']."</p>";
    echo "<p>"."Apellido: ".$_POST['apellido']."</p>";
    echo "<p>"."Ciudad: ".$_POST['ciudad']."</p>";
    echo "<p>"."Edad: ".$_POST['edad']."</p>";
    echo "<p>"."Telefono: ".$_POST['telefono']."</p>";
    echo "<p>"."Correo: ".$_POST['correo']."</p>";
    echo "<p>"."Estado Civil: ".$_POST['estadoCivil']."</p>";
    
    

}

?>


</body>
</html>