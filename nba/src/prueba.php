<?php

if(isset($_POST['nom']))
    {
        $nom = $_POST['nom'];
        $pro = $_POST['pro'];
        $alt = $_POST['alt'];
        $pes = $_POST['pes'];
        $pos = $_POST['pos'];
        $neq = $_POST['neq'];
    }

    echo $nom;
    echo $pro;
    echo $alt;
    echo $pes;
    echo $pos;
    echo $neq;


// $conector = new mysqli("localhost","root", "", "nba");
// if ($conector->connect_errno) 
//   echo "Fallo al conectar a MySQL: " . $conector->connect_errno;

//   $conector->query("INSERT INTO jugadores (nombre,procedencia,altura,peso,posicion,nombre_equipo) VALUES ('$nom','$pro','$alt','$pes','$pos','$neq')");

//   $resBD = $conector->query("SELECT * FROM jugadores");
//   $result = mysqli_fetch_assoc($resBD);



?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipo Basket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<table>
<th><td>Nombre</td><td>Procedencia</td><td>Altura</td><td>Peso</td><td>Posición</td><td>Nombre Equipo</td></th>
<tr>

<?php
// echo"<td>".$result['nombre']."</td>";
// echo"<td>".$result['procedencia']."</td>";
// echo"<td>".$result['altura']."</td>";
// echo"<td>".$result['peso']."</td>";
// echo"<td>".$result['posicion']."</td>";
// echo"<td>".$result['nombre_equipo']."</td>";
?>

</tr>
</table>
    
</body>
</html> -->