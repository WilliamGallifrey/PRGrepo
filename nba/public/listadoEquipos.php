<?php

require "../src/Equipo.php";

$equipo = new Equipo();

$conector = $equipo->bdconn();

if(isset($_POST['nom']))
    {
        $nom = $_POST['nom'];
        $ciu = $_POST['pro'];
        $conf = $_POST['alt'];
        $div = $_POST['pes'];

        $equipo->insertarEquipo($nom,$ciu,$conf,$div);
    }  

  $resBD = $equipo->listado();
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
<th><td>Nombre</td><td>Ciudad</td><td>Conferencia</td><td>Division</td></th>


<?php

while($result = mysqli_fetch_assoc($resBD))
{
    echo"<tr>";
    echo"<td></td>";
    echo"<td>$result[Nombre]</a></td>";
    echo"<td>$result[Ciudad]</td>";
    echo"<td>$result[Conferencia]</td>";
    echo"<td>$result[Division]</td>";
    echo"</tr>";
}
?>


</table>
<article>
    <?php include "assets/footer.html"; ?>
</body>
</html>