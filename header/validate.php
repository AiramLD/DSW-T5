<?php
// ob_start();
$user = "pepe";
$password = "1234";

// echo "debe fallar el header";
if ($user == $_POST['user'] && $password==$_POST['password']) {
  header('Location: login.html');
} else {
  header('Location: logout.html');
}