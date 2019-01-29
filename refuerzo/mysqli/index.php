
<?php
$conector = new mysqli("localhost","root", "", "liga");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
}else{
  //Interaccion con la base de datos
  echo "<h1>Jugadores y su equipo</h1>";
echo "<h1>Se ha cambiado la estructura de la base de datos, está incluída también en el fichero</h1>";
  $resultado = $conector->query("SELECT nombre ,apellido, nombre_eq FROM jugador JOIN equipo WHERE jugador.equipo = equipo.id_equipo");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista jugadores</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <table>
        <th><td>Nombre</td><td>Apellido</td><td>Equipo</td></th>
    <?php
        foreach ($resultado as $valor) 
        {
            echo"<tr>";
            echo"<td></td>";
            echo"<td>".$valor['nombre']."</td>";
            echo"<td>".$valor['apellido']."</td>";
            echo"<td>".$valor['nombre_eq']."</td>";
            echo"</tr>";
        }   
    ?>
    </table>

    <a class="btn-floating btn-large waves-effect waves-light red" href="insertarEquipo.php"><i class="material-icons">+</i></a>

    

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>