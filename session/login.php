<?php
session_start();
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
}else{
  if (isset($_GET['name'])) {
    $_SESSION['user'] = $_GET['name'];
    $user = $_GET['name'];
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if (isset($user)){
    echo "<h1>Hola $user</h1>";
  }else{
    ?>
    <h2>Bienvenido,¿ Cómo te llamas?</h2>
    <from actio="login.php">
      <p>
        <input type="text" name="name" id="">
        <input type="submit" value="enviar">
      </p>
    </from>
    <?php
  }
  ?>
  <p>
    <a href="logout.php">Cerrar sesion</a>
  </p>
</body>
</html>