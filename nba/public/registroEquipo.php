
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro EQUIPO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/nba.css">
</head>
<body>
<?php include "assets/navSup.php";?>

<form action="listadoUsuarios.php" method="POST">
        <input type="text" placeholder ="Nombre" name="nom" required>
        <input type="text" placeholder ="Ciudad" name="ciu" required>
        <input type="text" placeholder ="Conferencia" name="conf" required>
        <input type="text" placeholder ="Division" name="div" required>
        <input class="waves-effect waves-light btn" type="submit" value="Insertar equipo">
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php include "assets/footer.html"; ?>
</body>
</html>