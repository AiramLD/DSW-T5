<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Access Denied</h1>
  <ul>
    <li>Usuario: <?php echo $_SERVER['PHP_AUTH_USER']; ?></li>
    <li>Contraseña: <?php echo $_SERVER['PHP_AUTH_PW']; ?></li>
  </ul>  
<h1>Acceso restringido</h1> 
<ul>
  <li>Usuario: <?= $_SERVER['PHP_AUTH_USER'] ?></li>
  <li>password: <?= $_SERVER['PHP_AUTH_PW'] ?></li>
</ul>
</body>
</html>