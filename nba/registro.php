<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro NBA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="listadoUsuarios.php" method="POST">
        <input type="text" placeholder ="Nombre" name="nom" required>
        <input type="text" placeholder ="Procedencia" name="pro" required>
        <input type="text" placeholder ="Altura" name="alt" required>
        <input type="text" placeholder ="Peso" name="pes" required>
        <input type="text" placeholder ="Posición" name="pos" required>
        <input type="text" placeholder ="Nombre equipo" name="neq" required>
        <input type="submit" value="Insertar usuario">


</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>