
<?php

$conector = new mysqli("localhost","root", "", "nba");
if ($conector->connect_errno) 
  echo "Fallo al conectar a MySQL: " . $conector->connect_errno;

if(isset($_GET['id']))
{
    $resBD = $conector->query("SELECT * FROM jugadores WHERE codigo = $_GET[id]");
    $resultado = mysqli_fetch_assoc($resBD);
}
else
{
    $resBD = $conector->query("SELECT * FROM jugadores WHERE codigo = 222");
    $resultado = mysqli_fetch_assoc($resBD);    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Inicio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="listadoUsuarios.php">Usuarios</a></li>
        <li><a href="registro.php">Registro</a></li>
      </ul>
    </div>
  </nav>

  <?php
  
  echo "<h2>$resultado[Nombre]</h2>";
  echo "<h4>Juega en:</h4>";
  echo "<h3>$resultado[Nombre_equipo]</h3>";
  
 
  
  
  ?>
        
</body>
</html>