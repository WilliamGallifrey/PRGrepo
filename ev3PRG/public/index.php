<?php

require('../src/Proyecto.php');
$proyecto = new Proyecto();

$res = $proyecto->lista();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Trabajador</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link rel="stylesheet" href="css/styles.css">

     
</head>
<body>
    <h3>Registro de usuario</h3>
    <form action="registro.php" method="POST">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellidos" name="apellidos">
        <input type="text" placeholder="Precio Hora" name="ph">
        <div class="input-field col s12">
        <select name = "proy">
            <?php
            while($row = mysqli_fetch_assoc($res))
            {
                echo "<option value='$row[id]'>$row[nombre]</option>";
            }
            ?>
        </select>
        </div>
        <input class="waves-effect waves-light btn" type="submit" value="ENVIAR">
    </form>
    
    <!-- Compiled and minified JavaScript -->
    <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src = "js/init.js"></script>       
</body>
</html>