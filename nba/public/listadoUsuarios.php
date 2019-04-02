<?php

require "../src/Jugador.php";

$jugador = new Jugador();

$conector = $jugador->bdconn();

    $resArr = $conector->query("SELECT Nombre_equipo FROM jugadores");
    $equipos = array();

    while($eq=mysqli_fetch_assoc($resArr))
    {
        array_push($equipos,$eq['Nombre_equipo']);
    }

if(isset($_POST['nom']))
    {
        $nom = $_POST['nom'];
        $pro = $_POST['pro'];
        $alt = $_POST['alt'];
        $pes = $_POST['pes'];
        $pos = $_POST['pos'];
        $neq = $_POST['neq'];

        if(!ctype_digit($pes))
        {
            $error="El peso no era un valor numérico";
            header("Location: registro.php?error=$error");
        }

        if(!in_array ($neq,$equipos))
        {
            $error="El equipo introducido no está en los equipos existentes";
            header("Location: registro.php?error=$error");
        }

        $jugador->insertar($nom,$pro,$alt,$pes,$pos,$neq);
    }  

  $resBD = $jugador->listado();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipo Basket</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/nba.css">

</head>
<body>

<?php include "assets/navSup.php";?>
<article id="content">
<table>
<th><td>Nombre</td><td>Procedencia</td><td>Altura</td><td>Peso</td><td>Posición</td><td>Nombre Equipo</td></th>


<?php

while($result = mysqli_fetch_assoc($resBD))
{
    echo"<tr>";
    echo"<td></td>";
    echo"<td><a href='index.php?id=$result[codigo]'>$result[Nombre]</a></td>";
    echo"<td>$result[Procedencia]</td>";
    echo"<td>$result[Altura]</td>";
    echo"<td>$result[Peso]</td>";
    echo"<td>$result[Posicion]</td>";
    echo"<td>$result[Nombre_equipo]</td>";
    echo"</tr>";
}
?>

<article>
</table>
    <?php include "assets/footer.html"; ?>
</body>
</html>