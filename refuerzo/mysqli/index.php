
<?php
$conector = new mysqli("localhost","root", "", "liga");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
}else{
  //Interaccion con la base de datos
  echo "<h1>Jugadores y su equipo</h1>";
  echo "<h1>He cambiado en la base de datos la columna 'nombre' de la tabla equipo por 'nombre _eq', la base liga está en el fichero también</h1>";
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
</body>
</html>