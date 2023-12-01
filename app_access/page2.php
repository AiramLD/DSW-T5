<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Página 2</h1>
  <?php
    if (isset($_SESSION['level'])) {
      ?>
      <h2>Contenido solo visto por usuarios registrados</h2>
      <?php
    } else {
      echo"<p>Esto no se ve porque no tiene permisos</p>";
    }
    ?>
    <p>Esto es comun para todos</p>
</body>
</html>