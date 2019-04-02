
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro NBA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/nba.css">
</head>
<body>
<?php include "assets/navSup.php";?>


<?php
if(isset($_GET['error']))
{
    echo" <h2 style = 'color:red'>$_GET[error]</h2>";
}
?>

<form action="listadoUsuarios.php" method="POST">
        <input type="text" placeholder ="Nombre" name="nom" required>
        <input type="text" placeholder ="Procedencia" name="pro" required>
        <input type="text" placeholder ="Altura" name="alt" required>
        <input type="text" placeholder ="Peso" name="pes" required>
        <input type="text" placeholder ="Posición" name="pos" required>
        <input type="text" placeholder ="Nombre equipo" name="neq" required>
        <input class="waves-effect waves-light btn" type="submit" value="Insertar usuario">


</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php include "assets/footer.html"; ?>
</body>
</html>