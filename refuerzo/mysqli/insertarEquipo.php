

<?php
$conector = new mysqli("localhost","root", "", "liga");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
}else{
  //Interaccion con la base de datos
  echo "<h1>Jugador Nuevo Añadido</h1>";
  $conector->query("INSERT INTO jugador (nombre,apellido,posicion,id_capitan,salario,equipo,altura) VALUES ('Pepito','Grillo','Banquillo Eterno',1,1400,2,1.73)");
  $resultado = $conector->query("SELECT* FROM jugador WHERE id_jugador = (SELECT max(id_jugador) FROM jugador)");
  $result = mysqli_fetch_assoc($resultado);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar equipo</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<table>
<th><td>Nombre</td><td>Apellido</td><td>Posición</td><td>id_capitan</td><td>Salario</td><td>Equipo</td><td>Altura</td></th>
<tr>

<?php
echo"<td></td>";
echo"<td>".$result['nombre']."</td>";
echo"<td>".$result['apellido']."</td>";
echo"<td>".$result['posicion']."</td>";
echo"<td>".$result['id_capitan']."</td>";
echo"<td>".$result['salario']."</td>";
echo"<td>".$result['equipo']."</td>";
echo"<td>".$result['altura']."</td>";

?>

</tr>
</table>
    
</body>
</html>