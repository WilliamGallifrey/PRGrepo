<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Números impares</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="mod.css">
</head>
<body>

<?php
    
    echo'<nav>
    <div class="nav-wrapper">
      <a href="refuerzo2.php" class="brand-logo">Inicio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="refuerzo1.php">Números impares</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Vídeos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>
    </nav>';


    echo"<h2>Ey, soy el resultado del refuerzo 1</h2>";
echo'<ul>';
for ($i=1; $i < 40 ; $i+=2) { 
    echo"<li class='numimpar'>".$i."</li>";
}
echo'</ul>';


?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>